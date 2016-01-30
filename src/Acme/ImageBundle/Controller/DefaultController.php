<?php

namespace Acme\ImageBundle\Controller;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $image = $this->get('doctrine')->getRepository('AcmeImageBundle:Image')->findAll();
	return $this->render('AcmeImageBundle:Default:index.html.twig',array('image'=>$image));
    }
    public function addAction(Request $request)
    {
        $image = new \Acme\ImageBundle\Entity\Image();
        $image->setTitle('');
        $image->setLink('');
        $image->setDescription('');
        $image->setImage('');
        $image->setBackgroundimage('');
        $form = $this->createFormBuilder($image)
                ->add('title','text')
                ->add('link','text')
                ->add('description','textarea')
                ->add('image','file')
                ->add('backgroundimage','file')
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
               $slider_background_image_dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/slider_background_image/';
               $a = $request->request->get('form');
               $og_image = rand().'_'.$form['image']->getData()->getClientOriginalName();
               $og_backgroundimage = rand().'_'.$form['backgroundimage']->getData()->getClientOriginalName();
               $image = new \Acme\ImageBundle\Entity\Image();
               $image->setTitle($a['title']);
               $image->setLink($a['link']);
               $image->setDescription($a['description']);
               $image->setImage($og_image);
               $image->setBackgroundimage($og_backgroundimage);
               $em = $this->getDoctrine()->getManager();
               $em->persist($image);
               $em->flush();
               $form->get('image')->getData()->move($dir,$og_image);
               $form->get('backgroundimage')->getData()->move($slider_background_image_dir,$og_backgroundimage);
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
        unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/slider_background_image/'.$image->getBackgroundimage());
        return $this->redirect($this->generateUrl('acme_image'));
    }
    
    public function editAction(Request $request)
    {
       $id = $request->get('id');
       $em = $this->getDoctrine()->getManager();
       $imageo = $em->getRepository('AcmeImageBundle:Image')->find($id);
       
            $em = $this->getDoctrine()->getManager();
            $image = $em->getRepository('AcmeImageBundle:Image')->find($id);
            $image1 = new \Acme\ImageBundle\Entity\Image();
            $image1->setTitle($image->getTitle());
            $image1->setLink($image->getLink());
            $image1->setDescription($image->getDescription());
            $form = $this->createFormBuilder($image1,array('action'=>'edit?id='.$id))
                ->add('title', 'text')    
                ->add('link', 'text')    
                ->add('description', 'textarea')        
                ->add('image', 'file',array('error_bubbling'=>true,'required'=>false))
                ->add('backgroundimage', 'file',array('error_bubbling'=>true,'required'=>false))
		->getForm();
		$form->handleRequest($request);
		$validator = $this->get('validator');
	  	$errors = $validator->validate($image1);
                if (count($errors) >= 3) {
                    return $this->render('AcmeImageBundle:Default:edit.html.twig', array('form' => $form->createView(),'image'=>$imageo->getImage(),'backgroundimage'=>$imageo->getBackgroundimage(),'id'=>$id));
		}else{
                    if($request->isMethod('post')=='edit')
                    {
                        $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
                        $slider_background_image_dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/slider_background_image/';
                        $em = $this->getDoctrine()->getManager();
                        $f = $request->request->get('form');
                        $image = $em->getRepository('AcmeImageBundle:Image')->find($id);
                        //$image = $this->getDoctrine()->getRepository('AcmeImageBundle:Image')->find($request->get('id'));
                        $image->setTitle($f['title']);
                        $image->setLink($f['link']);
                        $image->setDescription($f['description']);
                        $old_image = $image->getImage();
                        $old_background_image = $image->getBackgroundimage();
                        if($_FILES['form']['name']['image']){
                            if(file_exists($dir."/".$old_image)){
                                unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_image);
                                $new_image = rand().'_'.$form['image']->getData()->getClientOriginalName();
                                $image->setImage($new_image);
                                $form->get('image')->getData()->move($dir,$new_image);
                            }
                        }
                        if($_FILES['form']['name']['backgroundimage']){
                            if(file_exists($slider_background_image_dir."/".$old_background_image)){
                                unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/slider_background_image/'.$old_background_image);
                                $new_background_image = rand().'_'.$form['backgroundimage']->getData()->getClientOriginalName();
                                $image->setBackgroundimage($new_background_image);
                                $form->get('backgroundimage')->getData()->move($slider_background_image_dir,$new_background_image);
                            }
                        }
                        $em->flush();
                        return $this->redirect($this->generateUrl('acme_image'));
                    }
		}
            return $this->render('AcmeImageBundle:Default:edit.html.twig', array('form' => $form->createView(),'image'=>$imageo->getImage(),'backgroundimage'=>$imageo->getBackgroundimage(),'id'=>$id));
    }
    
}
