<?php

namespace Acme\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Form;
use Acme\InfoBundle\Entity\Work;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class WorkController extends Controller
{
    public function indexAction(Request $request)
    {
	$order_by = '';	
	$em = $this->get('doctrine.orm.entity_manager');
	$repository = $em->getRepository('Acme\InfoBundle\Entity\Work');
	$languagesCount = $repository->getIdCount();
	$paginator = new Work($languagesCount);
	$strPaginator = $paginator->RenderPaginator();
        $works = $this->get('doctrine')->getRepository('AcmeInfoBundle:Work')->findAll();
        return $this->render('AcmeInfoBundle:Work:index.html.twig',array('works'=>$works,'paginator'=>$strPaginator));
    }

    public function addAction(Request $request)
    {
	$work = new \Acme\InfoBundle\Entity\Work();
		    $work->setTitle('');
		    $work->setDescription('');
                    $work->setImage('');
		    $form = $this->createFormBuilder($work)
		        ->add('title', 'text')
		        ->add('description','textarea')
                        ->add('image','file')
		        ->getForm();
		 $form->handleRequest($request);
		 $validator = $this->get('validator');
	  	 $errors = $validator->validate($work);
		 if (count($errors) > 0) {
				return $this->render('AcmeInfoBundle:Work:add.html.twig', array('form' => $form->createView()));
			}else{
                                $a = $request->request->get('form');
                                $img = $form['image']->getData()->getClientOriginalName();
                                $work = new Work();
				$work->setTitle($a['title']);
				$work->setDescription($a['description']);
                                $work->setImage($img);
				$em = $this->getDoctrine()->getManager();
				$em->persist($work);
				$em->flush();
                                $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/works/'.$work->getId();
                                mkdir($dir);
                                $form->get('image')->getData()->move($dir,$img);
				return $this->redirect($this->generateUrl('acme_info_work'));
			}
    	return $this->render('AcmeInfoBundle:Work:add.html.twig', array('form' => $form->createView()));
    }

    public function editAction(Request $request)
    {
	$id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $work = $em->getRepository('AcmeInfoBundle:Work')->find($id);
        $oldimg = $work->getImage();
        $works = new \Acme\InfoBundle\Entity\Work();
		    $works->setTitle($work->getTitle());
		    $works->setDescription($work->getDescription());
            $form = $this->createFormBuilder($works)
		        ->add('title', 'text')
		        ->add('description','textarea')
                        ->add('image','file', array('error_bubbling' => TRUE,'required'=>false))
		        ->getForm();
            $form->handleRequest($request);
            $validator = $this->get('validator');
            $errors = $validator->validate($works);
            if($request->getMethod() == 'POST')
            {
                if (count($errors) > 1) {
                    return $this->render('AcmeInfoBundle:Work:edit.html.twig', array('form' => $form->createView(),'work'=>$work,'id'=>$id,'image'=>$oldimg));
                }else{
                    if($_FILES['form']['name']['image'])
                    {
                            $serv = $em->getRepository('AcmeInfoBundle:Work')->find($id);
                            unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/works/'.$serv->getId().'/'.$oldimg);
                            $newimg = $form['image']->getData()->getClientOriginalName();
                            $serv->setImage($newimg);
                            $em->persist($serv);
                            $em->flush();
                            $img = $form['image']->getData()->getClientOriginalName();
                            $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/works/'.$serv->getId().'/';
                            $form->get('image')->getData()->move($dir,$img);
                            return $this->redirect($this->generateUrl('acme_info_work'));
                    }
                    else
                    {
                            $a = $request->request->get('form');
                            $work->setImage($oldimg);
                            $work->setTitle($a['title']);
                            $work->setDescription($a['description']);
                            $em->persist($work);
                            $em->flush();
                            return $this->redirect($this->generateUrl('acme_info_work'));
                    }
                }
            }    
        return $this->render('AcmeInfoBundle:Work:edit.html.twig', array('form' => $form->createView(),'work'=>$work,'id'=>$id,'image'=>$oldimg));
    }
    
    public function deleteAction(Request $request)
    {
	$id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $work = $em->getRepository('AcmeInfoBundle:Work')->find($id);
        $em->remove($work);
        $em->flush();
        if(is_file($_SERVER['DOCUMENT_ROOT'].'/uploads/works/'.$id.'/'.$work->getImage())){
        	unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/works/'.$id.'/'.$work->getImage());
                rmdir($_SERVER['DOCUMENT_ROOT'].'/uploads/works/'.$id);
        }
        return $this->redirect($this->generateUrl('acme_info_work'));
    }
}
