<?php

namespace Acme\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Form;
use Acme\InfoBundle\Entity\People;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PeopleController extends Controller
{
    public function indexAction(Request $request)
    {
	$order_by = '';	
	$em = $this->get('doctrine.orm.entity_manager');
	$repository = $em->getRepository('Acme\InfoBundle\Entity\People');
	$languagesCount = $repository->getIdCount();
	$paginator = new People($languagesCount);
	$strPaginator = $paginator->RenderPaginator();
        $peoples = $this->get('doctrine')->getRepository('AcmeInfoBundle:People')->findAll();
        return $this->render('AcmeInfoBundle:People:index.html.twig',array('peoples'=>$peoples,'paginator'=>$strPaginator));
    }

    public function addAction(Request $request)
    {
	$people = new \Acme\InfoBundle\Entity\People();
		    $people->setTitle('');
		    $people->setDescription('');
                    $people->setImage('');
		    $form = $this->createFormBuilder($people)
		        ->add('title', 'text')
		        ->add('description','textarea')
                        ->add('image','file')
		        ->getForm();
		 $form->handleRequest($request);
		 $validator = $this->get('validator');
	  	 $errors = $validator->validate($people);
		 if (count($errors) > 0) {
				return $this->render('AcmeInfoBundle:People:add.html.twig', array('form' => $form->createView()));
			}else{
                                $a = $request->request->get('form');
                                $img = $form['image']->getData()->getClientOriginalName();
                                $people = new People();
				$people->setTitle($a['title']);
				$people->setDescription($a['description']);
                                $people->setImage($img);
				$em = $this->getDoctrine()->getManager();
				$em->persist($people);
				$em->flush();
                                $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/peoples/'.$people->getId();
                                mkdir($dir);
                                $form->get('image')->getData()->move($dir,$img);
				return $this->redirect($this->generateUrl('acme_info_people'));
			}
    	return $this->render('AcmeInfoBundle:People:add.html.twig', array('form' => $form->createView()));
    }

    public function editAction(Request $request)
    {
	$id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $people = $em->getRepository('AcmeInfoBundle:People')->find($id);
        $oldimg = $people->getImage();
        $peoples = new \Acme\InfoBundle\Entity\People();
		    $peoples->setTitle($people->getTitle());
		    $peoples->setDescription($people->getDescription());
            $form = $this->createFormBuilder($peoples)
		        ->add('title', 'text')
		        ->add('description','textarea')
                        ->add('image','file', array('error_bubbling' => TRUE,'required'=>false))
		        ->getForm();
            $form->handleRequest($request);
            $validator = $this->get('validator');
            $errors = $validator->validate($peoples);
            if($request->getMethod() == 'POST')
            {
                if (count($errors) > 1) {
                    return $this->render('AcmeInfoBundle:People:edit.html.twig', array('form' => $form->createView(),'people'=>$people,'id'=>$id,'image'=>$oldimg));
                }else{
                    if($_FILES['form']['name']['image'])
                    {
                            $serv = $em->getRepository('AcmeInfoBundle:People')->find($id);
                            unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/peoples/'.$serv->getId().'/'.$oldimg);
                            $newimg = $form['image']->getData()->getClientOriginalName();
                            $serv->setImage($newimg);
                            $em->persist($serv);
                            $em->flush();
                            $img = $form['image']->getData()->getClientOriginalName();
                            $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/peoples/'.$serv->getId().'/';
                            $form->get('image')->getData()->move($dir,$img);
                            return $this->redirect($this->generateUrl('acme_info_people'));
                    }
                    else
                    {
                            $a = $request->request->get('form');
                            $people->setImage($oldimg);
                            $people->setTitle($a['title']);
                            $people->setDescription($a['description']);
                            $em->persist($people);
                            $em->flush();
                            return $this->redirect($this->generateUrl('acme_info_people'));
                    }
                }
            }    
        return $this->render('AcmeInfoBundle:People:edit.html.twig', array('form' => $form->createView(),'people'=>$people,'id'=>$id,'image'=>$oldimg));
    }
    
    public function deleteAction(Request $request)
    {
	$id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $people = $em->getRepository('AcmeInfoBundle:People')->find($id);
        $em->remove($people);
        $em->flush();
        if(is_file($_SERVER['DOCUMENT_ROOT'].'/uploads/peoples/'.$id.'/'.$people->getImage())){
        	unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/peoples/'.$id.'/'.$people->getImage());
                rmdir($_SERVER['DOCUMENT_ROOT'].'/uploads/peoples/'.$id);
        }
        return $this->redirect($this->generateUrl('acme_info_people'));
    }
}
