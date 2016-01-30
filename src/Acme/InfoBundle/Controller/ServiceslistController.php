<?php

namespace Acme\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Form;
use Acme\InfoBundle\Entity\Services;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ServiceslistController extends Controller
{
    public function indexAction(Request $request)
    {
	$order_by = '';	
	$em = $this->get('doctrine.orm.entity_manager');
	$repository = $em->getRepository('Acme\InfoBundle\Entity\Services');
	$languagesCount = $repository->getIdCount();
	$paginator = new Services($languagesCount);
	$strPaginator = $paginator->RenderPaginator();
        $services = $this->get('doctrine')->getRepository('AcmeInfoBundle:Services')->findAll();
        return $this->render('AcmeInfoBundle:Serviceslist:index.html.twig',array('services'=>$services,'paginator'=>$strPaginator));
    }

    public function addAction(Request $request)
    {
	$services = new \Acme\InfoBundle\Entity\Services();
		    $services->setTitle('');
		    $services->setDescription('');
                    $services->setImage('');
		    $form = $this->createFormBuilder($services)
		        ->add('title', 'text')
		        ->add('description','textarea')
                        ->add('image','file')
		        ->getForm();
		 $form->handleRequest($request);
		 $validator = $this->get('validator');
	  	 $errors = $validator->validate($services);
		 if (count($errors) > 0) {
				return $this->render('AcmeInfoBundle:Serviceslist:add.html.twig', array('form' => $form->createView()));
			}else{
                                $a = $request->request->get('form');
                                $img = $form['image']->getData()->getClientOriginalName();
                                $services = new Services();
				$services->setTitle($a['title']);
				$services->setDescription($a['description']);
                                $services->setImage($img);
				$em = $this->getDoctrine()->getManager();
				$em->persist($services);
				$em->flush();
                                $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/recent_works/'.$services->getId();
                                mkdir($dir);
                                $form->get('image')->getData()->move($dir,$img);
				return $this->redirect($this->generateUrl('acme_info_serviceslist'));
			}
    	return $this->render('AcmeInfoBundle:Serviceslist:add.html.twig', array('form' => $form->createView()));
    }

    public function editAction(Request $request)
    {
	$id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $service = $em->getRepository('AcmeInfoBundle:Services')->find($id);
        $oldimg = $service->getImage();
        $services = new \Acme\InfoBundle\Entity\Services();
		    $services->setTitle($service->getTitle());
		    $services->setDescription($service->getDescription());
            $form = $this->createFormBuilder($services)
		        ->add('title', 'text')
		        ->add('description','textarea')
                        ->add('image','file', array('error_bubbling' => TRUE,'required'=>false))
		        ->getForm();
            $form->handleRequest($request);
            $validator = $this->get('validator');
            $errors = $validator->validate($services);
            if($request->getMethod() == 'POST')
            {
                if (count($errors) > 1) {
                    return $this->render('AcmeInfoBundle:Serviceslist:edit.html.twig', array('form' => $form->createView(),'services'=>$services,'id'=>$id,'image'=>$oldimg));
                }else{
                    if($_FILES['form']['name']['image'])
                    {
                            $serv = $em->getRepository('AcmeInfoBundle:Services')->find($id);
                            unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/recent_works/'.$serv->getId().'/'.$oldimg);
                            $newimg = $form['image']->getData()->getClientOriginalName();
                            $serv->setImage($newimg);
                            $em->persist($serv);
                            $em->flush();
                            $img = $form['image']->getData()->getClientOriginalName();
                            $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/recent_works/'.$serv->getId().'/';
                            $form->get('image')->getData()->move($dir,$img);
                            return $this->redirect($this->generateUrl('acme_info_serviceslist'));
                    }
                    else
                    {
                            $a = $request->request->get('form');
                            $service->setImage($oldimg);
                            $service->setTitle($a['title']);
                            $service->setDescription($a['description']);
                            $em->persist($service);
                            $em->flush();
                            return $this->redirect($this->generateUrl('acme_info_serviceslist'));
                    }
                }
            }    
        return $this->render('AcmeInfoBundle:Serviceslist:edit.html.twig', array('form' => $form->createView(),'services'=>$services,'id'=>$id,'image'=>$oldimg));
    }
    
    public function deleteAction(Request $request)
    {
	$id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $services = $em->getRepository('AcmeInfoBundle:Services')->find($id);
        $em->remove($services);
        $em->flush();
        if(is_file($_SERVER['DOCUMENT_ROOT'].'/uploads/recent_works/'.$id.'/'.$services->getImage())){
        	unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/recent_works/'.$id.'/'.$services->getImage());
                rmdir($_SERVER['DOCUMENT_ROOT'].'/uploads/recent_works/'.$id);
        }
        return $this->redirect($this->generateUrl('acme_info_serviceslist'));
    }
}
