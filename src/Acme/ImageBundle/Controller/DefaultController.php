<?php

namespace Acme\ImageBundle\Controller;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Oneup\UploaderBundle\Event\PostPersistEvent;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\Product;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //$image = $this->get('doctrine')->getRepository('AcmeImageBundle:Image')->findAll();
        $image = $this->get('doctrine')->getRepository('AcmeImageBundle:Image')->findBy(array(), array('createdAt' => 'DESC'));
	return $this->render('AcmeImageBundle:Default:index.html.twig',array('image'=>$image));
    }
    public function addAction(Request $request)
    {
        $image = new \Acme\ImageBundle\Entity\Image();
        $image->setImage('');
        $form = $this->createFormBuilder($image)
                ->add('image','file')
                ->getForm();
        $form->handleRequest($request);
        $validator = $this->get('validator');
	$errors = $validator->validate($image);
        if (count($errors) > 0) {
            return $this->render('AcmeImageBundle:Default:add.html.twig', array('form' => $form->createView()));
        }
        else
        {
            if($request->isMethod('post')=='add')
            {
               $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads';
               $a = $request->request->get('form');
               $og_image = rand().'_'.$form['image']->getData()->getClientOriginalName();
               $image = new \Acme\ImageBundle\Entity\Image();
               $image->setImage($og_image);
               $em = $this->getDoctrine()->getManager();
               $em->persist($image);
               $em->flush();
               $form->get('image')->getData()->move($dir,$og_image);
               return $this->redirect($this->generateUrl('acme_image'));
               }
        }
        return $this->render('AcmeImageBundle:Default:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    public function deleteAction(Request $request)
    {
        $id = $request->get('id');
	$em = $this->getDoctrine()->getManager();
        $image = $em->getRepository('AcmeImageBundle:Image')->find($id);
        $em->remove($image);
        $em->flush();
        unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$image->getImage());
        return $this->redirect($this->generateUrl('acme_image'));
    }
    
    public function editAction(Request $request)
    {
       $id = $request->get('id');
       $em = $this->getDoctrine()->getManager();
       $imageo = $em->getRepository('AcmeImageBundle:Image')->find($id);

            $em = $this->getDoctrine()->getManager();
            $image = $em->getRepository('AcmeImageBundle:Image')->find($id);
            $image = new \Acme\ImageBundle\Entity\Image();
            $image->setImage($image->getImage());
            $form = $this->createFormBuilder($image,array('action'=>'edit?id='.$id))
                ->add('image', 'file', array('error_bubbling' => TRUE))
		->getForm();
		$form->handleRequest($request);
		$validator = $this->get('validator');
	  	$errors = $validator->validate($image);
                if (count($errors) > 1) {
                    return $this->redirect($this->generateUrl('acme_image'));
		}else{
                    if($request->isMethod('post')=='edit')
                    {
                        if($_FILES['form']['name']['image'] != NULL)
                        {
                            $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
                            $em = $this->getDoctrine()->getManager();
                            $image = $em->getRepository('AcmeImageBundle:Image')->find($id);
                            $old_image = $image->getImage();
                            unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_image);
                            $new_image = rand().'_'.$form['image']->getData()->getClientOriginalName();    
                            $image = $this->getDoctrine()->getRepository('AcmeImageBundle:Image')->find($request->get('id'));
                            $image->setImage($new_image);
                            $em->flush();
                            $form->get('image')->getData()->move($dir,$new_image);
                            return $this->redirect($this->generateUrl('acme_image'));
                        }else{
                            return $this->redirect($this->generateUrl('acme_image'));
                        }
                    }
		}
            return $this->render('AcmeImageBundle:Default:edit.html.twig', array('form' => $form->createView(),'image'=>$imageo->getImage(),'id'=>$id));
    }
    
}
