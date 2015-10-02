<?php

namespace Acme\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Form;
use Acme\InfoBundle\Entity\News;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
class NewslistController extends Controller
{
    public function indexAction(Request $request)
    {
	$order_by = '';	
	$em = $this->get('doctrine.orm.entity_manager');
	$repository = $em->getRepository('Acme\InfoBundle\Entity\News');
	$languagesCount = $repository->getIdCount();
	$paginator = new News($languagesCount);
	$strPaginator = $paginator->RenderPaginator();
        $news = $this->get('doctrine')->getRepository('AcmeInfoBundle:News')->findAll();
        return $this->render('AcmeInfoBundle:Newslist:index.html.twig',array('news'=>$news,'paginator'=>$strPaginator));
    }

    public function addAction(Request $request)
    {
	$news = new \Acme\InfoBundle\Entity\News();
		    $news->setTitle('');
		    $news->setDescription('');
                    $news->setImage('');
		    $form = $this->createFormBuilder($news)
		        ->add('title', 'text')
		        ->add('description','textarea')
                        ->add('image','file')
		        ->getForm();
		 $form->handleRequest($request);
		 $validator = $this->get('validator');
	  	 $errors = $validator->validate($news);
		 if (count($errors) > 0) {
				return $this->render('AcmeInfoBundle:Newslist:add.html.twig', array('form' => $form->createView()));
			}else{
                                $a = $request->request->get('form');
                                $img = $form['image']->getData()->getClientOriginalName();
                                $news = new News();
				$news->setTitle($a['title']);
				$news->setDescription($a['description']);
                                $news->setImage($img);
				$em = $this->getDoctrine()->getManager();
				$em->persist($news);
				$em->flush();
                                $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/news/'.$news->getId();
                                mkdir($dir);
                                $form->get('image')->getData()->move($dir,$img);
				return $this->redirect($this->generateUrl('acme_info_newslist'));
			}
    	return $this->render('AcmeInfoBundle:Newslist:add.html.twig', array('form' => $form->createView()));
    }

    public function editAction(Request $request)
    {
	$id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $new = $em->getRepository('AcmeInfoBundle:News')->find($id);
        $oldimg = $new->getImage();
        $news = new \Acme\InfoBundle\Entity\News();
        $news->setTitle($new->getTitle());
        $news->setDescription($new->getDescription());
        $form = $this->createFormBuilder($news)
        ->add('title', 'text')
        ->add('description','textarea')
        ->add('image','file', array('error_bubbling' => TRUE))
        ->getForm();
        $form->handleRequest($request);
        $validator = $this->get('validator');
        $errors = $validator->validate($news);
        if($request->getMethod() == 'POST')
        {
            if (count($errors) > 1) {
                return $this->render('AcmeInfoBundle:Newslist:edit.html.twig', array('form' => $form->createView(),'news'=>$news,'id'=>$id,'image'=>$oldimg));
            }else{
                if($_FILES['form']['name']['image'])
		{
			$new = $em->getRepository('AcmeInfoBundle:News')->find($id);
			unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/news/'.$new->getId().'/'.$oldimg);
			$newimg = $form['image']->getData()->getClientOriginalName();
			$new->setImage($newimg);
			$em->persist($new);
                        $em->flush();
			$img = $form['image']->getData()->getClientOriginalName();
		        $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/news/'.$new->getId().'/';
		        $form->get('image')->getData()->move($dir,$img);
			return $this->redirect($this->generateUrl('acme_info_newslist'));
                }
		else
		{
			$a = $request->request->get('form');
                        $new->setImage($oldimg);
			$new->setTitle($a['title']);
			$new->setDescription($a['description']);
			$em->persist($new);
                        $em->flush();
			return $this->redirect($this->generateUrl('acme_info_newslist'));
		}
            }
        }   
        return $this->render('AcmeInfoBundle:Newslist:edit.html.twig', array('form' => $form->createView(),'news'=>$news,'id'=>$id,'image'=>$oldimg));
    }
    
    public function deleteAction(Request $request)
    {
	$id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository('AcmeInfoBundle:News')->find($id);
        $em->remove($news);
        $em->flush();
        if(is_file($_SERVER['DOCUMENT_ROOT'].'/uploads/news/'.$id.'/'.$news->getImage())){
        	unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/news/'.$id.'/'.$news->getImage());
                rmdir($_SERVER['DOCUMENT_ROOT'].'/uploads/news/'.$id);
        }
        return $this->redirect($this->generateUrl('acme_info_newslist'));
    }
}
