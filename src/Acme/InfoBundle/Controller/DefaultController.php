<?php

namespace Acme\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\Form;
use Acme\InfoBundle\Form\Type\InfoType;
use Acme\InfoBundle\Form\Type\LogoType;
use Acme\InfoBundle\Entity\Info;
use Acme\InfoBundle\Entity\Contactus;
use Acme\InfoBundle\Entity\Front;
use Acme\InfoBundle\Entity\Testimonials;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $info = $this->get('doctrine')->getRepository('AcmeInfoBundle:Info')->findAll();
        return $this->render('AcmeInfoBundle:Default:index.html.twig',array('info'=>$info));
    }
    public function addAction(Request $request)
    {
        $info = $this->get('doctrine')->getRepository('AcmeInfoBundle:Info')->findAll();
        $count = count($info);
        $a = 0; $b=100; $c=array();
        for($a;$a<=$b;$a++)
        {
            $c[] = $a;
        }
        $info = new \Acme\InfoBundle\Entity\Info();
        $info->setTitle('');
        $info->setPercentage('');
        $form = $this->createFormBuilder($info)
            ->add('title', 'text')
            ->add('percentage', 'choice', array('choices' => array('placeholder'=>'select percentage',''=>$c)))
            ->getForm();
        $form->handleRequest($request);
        $validator = $this->get('validator');
        $errors = $validator->validate($info);
        if (count($errors) > 0) {
                return $this->render('AcmeInfoBundle:Default:add.html.twig', array('form' => $form->createView()));
        }else{
            if($request->isMethod('post')=='add')
            {
                if($count >= 10){
                    return $this->render('AcmeInfoBundle:Default:add.html.twig', array('form' => $form->createView()));
                }
                $em = $this->getDoctrine()->getManager();
                $a = $request->request->get('form');
                $info = new \Acme\InfoBundle\Entity\Info();
                $info->setTitle($a['title']);
                $info->setPercentage($a['percentage']);
                $em->persist($info);
                $em->flush();
		$this->get('session')->getFlashBag()->set('success', 'Info Add Successfully');
                return $this->redirect($this->generateUrl('acme_info'));
            }
        }
        return $this->render('AcmeInfoBundle:Default:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    public function editAction(Request $request)
    {
        $a = 0; $b=100; $c=array();
        for($a;$a<=$b;$a++)
        {
            $c[] = $a;
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $inform = $em->getRepository('AcmeInfoBundle:Info')->find($id);
        $info = new \Acme\InfoBundle\Entity\Info();
        $info->setTitle($inform->getTitle());
        $info->setPercentage($inform->getPercentage());
        $form = $this->createFormBuilder($info)
            ->add('title', 'text')
            ->add('percentage', 'choice', array('choices' => array('placeholder'=>'select percentage',''=>$c)))
            ->getForm();
        $form->handleRequest($request);
        $validator = $this->get('validator');
        $errors = $validator->validate($info);
        if (count($errors) > 0) {
            //echo "invalid";
        }else{
            if($request->isMethod('post')=='edit')
            {
                $a = $request->request->get('form');
                $info = $em->getRepository('AcmeInfoBundle:Info')->find($id);
                $info->setTitle($a['title']);
                $info->setPercentage($a['percentage']);
                $em->persist($info);
                $em->flush();
		$this->get('session')->getFlashBag()->set('success', 'Info Update Successfully');
                return $this->redirect($this->generateUrl('acme_info'));
            }
        }
        return $this->render('AcmeInfoBundle:Default:edit.html.twig', array('form' => $form->createView(),'id'=>$id));
    }
    public function deleteAction(Request $request)
    {
        $id = $request->get('id');
	$em = $this->getDoctrine()->getManager();
        $info = $em->getRepository('AcmeInfoBundle:Info')->find($id);
        $em->remove($info);
        $em->flush();
	$this->get('session')->getFlashBag()->set('notice', 'Your Record Delete Successfully');
        return $this->redirect($this->generateUrl('acme_info'));
    }
    public function ourserviceAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $all = $this->get('doctrine')->getRepository('AcmeInfoBundle:Front')->findAll();
        $front = $em->getRepository('AcmeInfoBundle:Front')->find($all[0]->getId());
	if($request->isMethod('POST') == 'save')
	{
		$id = $request->get('id');
		$front = $em->getRepository('AcmeInfoBundle:Front')->find($id);
                $front->setDescription($request->get('description'));
                $em->persist($front);
                $em->flush();
		$this->get('session')->getFlashBag()->set('notice', 'Features Update Successfully');		
		return $this->render('AcmeInfoBundle:Default:ourservice.html.twig', array('front' => $front));
	}
	return $this->render('AcmeInfoBundle:Default:ourservice.html.twig', array('front' => $front));
    }

    public function contactusAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
	$contactus = $em->getRepository('AcmeInfoBundle:Contactus')->find('1');
	if($request->isMethod('POST') == 'save')
	{
		$id = $request->get('id');
		$contactus = $em->getRepository('AcmeInfoBundle:Contactus')->find($id);
                $contactus->setDescription($request->get('description'));
                $em->persist($contactus);
                $em->flush();
		$this->get('session')->getFlashBag()->set('notice', 'ContactUs Update Successfully');
		return $this->render('AcmeInfoBundle:Default:contactus.html.twig', array('contactus' => $contactus));
	}
	return $this->render('AcmeInfoBundle:Default:contactus.html.twig', array('contactus' => $contactus));
    }
	
    public function testimonialsAction(Request $request)
    {
	$order_by = '';	
	$em = $this->get('doctrine.orm.entity_manager');
	$repository = $em->getRepository('Acme\InfoBundle\Entity\Testimonials');
	$languagesCount = $repository->getIdCount();
	$paginator = new Testimonials($languagesCount);
	$strPaginator = $paginator->RenderPaginator();
        $testimonials = $this->get('doctrine')->getRepository('AcmeInfoBundle:Testimonials')->findAll();
	return $this->render('AcmeInfoBundle:Default:testimonials.html.twig',array('testimonials'=>$testimonials,'paginator'=>$strPaginator));
    }

    public function testiaddAction(Request $request)
    {
        $testi = new \Acme\InfoBundle\Entity\Testimonials;
        $testi->setName('');
        $testi->setPost('');
	$testi->setDescription('');
        $testi->setImage('');
        $form = $this->createFormBuilder($testi)
            ->add('name', 'text')
            ->add('post', 'text')
	    ->add('description', 'textarea')	
            ->add('image', 'file')	    
	    ->add('save', 'submit', array('label' => 'Save'))	
            ->getForm();
	$form->handleRequest($request);
        $validator = $this->get('validator');
        $errors = $validator->validate($testi);
	if (count($errors) > 0) {
                return $this->render('AcmeInfoBundle:Default:testiadd.html.twig', array('form' => $form->createView()));
        }else{
            if($request->isMethod('post') == 'save')
            {	
                $a = $request->request->get('form');
                $img = $form['image']->getData()->getClientOriginalName();
		$em = $this->getDoctrine()->getManager();
		$a = $request->request->get('form');
                $testimonial = new \Acme\InfoBundle\Entity\Testimonials();
                $testimonial->setName($a['name']);
		$testimonial->setPost($a['post']);
		$testimonial->setDescription($a['description']);
                $testimonial->setImage($img);
                $em->persist($testimonial);
                $em->flush();
                $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/testimonials/'.$testimonial->getId();
                mkdir($dir);
                $form->get('image')->getData()->move($dir,$img);
		$this->get('session')->getFlashBag()->set('notice', 'Your Record Add Successfully');
                return $this->redirect($this->generateUrl('acme_info_testimonials'));
	    }
	}
	return $this->render('AcmeInfoBundle:Default:testiadd.html.twig',array('form' => $form->createView()));
    }

    public function testidelAction(Request $request)
    {
	$id = $request->get('id');
	$em = $this->getDoctrine()->getManager();
        $info = $em->getRepository('AcmeInfoBundle:Testimonials')->find($id);
        $em->remove($info);
        $em->flush();
        if(is_file($_SERVER['DOCUMENT_ROOT'].'/uploads/testimonials/'.$id.'/'.$info->getImage())){
        	unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/testimonials/'.$id.'/'.$info->getImage());
                rmdir($_SERVER['DOCUMENT_ROOT'].'/uploads/testimonials/'.$id);
        }
	$this->get('session')->getFlashBag()->set('notice', 'Your Record Delete Successfully');
        return $this->redirect($this->generateUrl('acme_info_testimonials'));	
    }

    public function testieditAction(Request $request)
    {
	$id = $request->get('id');
	$em = $this->getDoctrine()->getManager();
        $testimonials = $em->getRepository('AcmeInfoBundle:Testimonials')->find($id);
        $oldimg = $testimonials->getImage();
        $testimonial = new \Acme\InfoBundle\Entity\Testimonials();
        $testimonial->setName($testimonials->getName());
        $testimonial->setPost($testimonials->getPost());
	$testimonial->setDescription($testimonials->getDescription());
        $form = $this->createFormBuilder($testimonial)
            ->add('name', 'text')
	    ->add('post', 'text')
            ->add('description', 'textarea')
            ->add('image','file', array('error_bubbling' => TRUE,'required'=>false))    
            ->getForm();
        $form->handleRequest($request);
        $validator = $this->get('validator');
        $errors = $validator->validate($form);
         if (count($errors) > 1) {
            //echo "invalid";
        }else{
            if($request->isMethod('post')=='edit')
            {
                if($_FILES['form']['name']['image'])
                {
                        $testi = $em->getRepository('AcmeInfoBundle:Testimonials')->find($id);
                        unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/testimonials/'.$testi->getId().'/'.$oldimg);
                        $newimg = $form['image']->getData()->getClientOriginalName();
                        $testi->setImage($newimg);
                        $em->persist($testi);
                        $em->flush();
                        $img = $form['image']->getData()->getClientOriginalName();
                        $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/testimonials/'.$testi->getId().'/';
                        $form->get('image')->getData()->move($dir,$img);
                        return $this->redirect($this->generateUrl('acme_info_testimonials'));
                }else{
                $a = $request->request->get('form');
                $info = $em->getRepository('AcmeInfoBundle:Testimonials')->find($id);
                $info->setName($a['name']);
                $info->setPost($a['post']);
                $info->setDescription($a['description']);
                $em->persist($info);
                $em->flush();
		$this->get('session')->getFlashBag()->set('success', 'Your Record Update Successfully');
                return $this->redirect($this->generateUrl('acme_info_testimonials'));
                }
            }
        }    
        return $this->render('AcmeInfoBundle:Default:testiedit.html.twig', array('form' => $form->createView(),'id'=>$id,'image'=>$oldimg));
    }
    
    public function logoAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $logo = $em->getRepository('AcmeInfoBundle:Logo')->findAll();
        
//        $qb = $em->createQueryBuilder();
//        $qb->select('count(account.id)');
//        $qb->from('AcmeInfoBundle:Logo','account');
//
//        $count = $qb->getQuery()->getSingleScalarResult();
//        echo $count;exit;
        
        return $this->render('AcmeInfoBundle:Default:logo.html.twig',array('logo'=>$logo));
    }
    
    public function logoaddAction(Request $request)
    {
        $image = new \Acme\InfoBundle\Entity\Logo();
        $image->setLogo('');
        $form = $this->createFormBuilder($image)
                ->add('logo','file')
                ->getForm();
        $form->handleRequest($request);
        $validator = $this->get('validator');
	$errors = $validator->validate($image);
        if (count($errors) > 0) {
            return $this->render('AcmeInfoBundle:Default:logoadd.html.twig', array('form' => $form->createView()));
        }
        else
        {
            if($request->isMethod('post')=='add')
            {
               $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/logo';
               $a = $request->request->get('form');
               $og_image = rand().'_'.$form['logo']->getData()->getClientOriginalName();
               $image = new \Acme\InfoBundle\Entity\Logo();
               $image->setLogo($og_image);
               $image->setStatus(0);
               $em = $this->getDoctrine()->getManager();
               $em->persist($image);
               $em->flush();
               $form->get('logo')->getData()->move($dir,$og_image);
	       $this->get('session')->getFlashBag()->set('success', 'Your Logo Add Successfully');	
               return $this->redirect($this->generateUrl('acme_info_logo'));
               }
        }
        return $this->render('AcmeInfoBundle:Default:logoadd.html.twig', array('form' => $form->createView()));
    }
    
    public function logostatusAction(Request $request)
    {       
            $id = $request->get('id');
            $em = $this->getDoctrine()->getManager();
            $logoStatus = $em->getRepository('AcmeInfoBundle:Logo')->find($id);
            $logo = $em->getRepository('AcmeInfoBundle:Logo')->findByStatus(1);
            $stat = $logoStatus->getStatus();
            if($stat == '1')
            {
		    $status = "Disable";
                    $em = $this->getDoctrine()->getManager();
                    $logo = $em->getRepository('AcmeInfoBundle:Logo')->find($id);
                    $logo->setStatus('0');
                    $em->flush();
		    $this->get('session')->getFlashBag()->set('success', 'Your Logo Status '.$status.' Successfully');
            }
            else
            {
		    $status = "Enable";
                    if(!count($logo)>=1){
                        $em = $this->getDoctrine()->getManager();
                        $logo = $em->getRepository('AcmeInfoBundle:Logo')->find($id);
                        $logo->setStatus('1');
                        $em->flush();
			$this->get('session')->getFlashBag()->set('success', 'Your Logo Status '.$status.' Successfully');
                    }else{
                        return new Response("1");
                    }
                    
            }
            //echo "true";
            $response = array("code" => 100, "success" => true, "status" => $logoStatus->getStatus(), "id" => $logoStatus->getId());
            //you can return result as JSON
            return new Response(json_encode($response)); 
    }
    
    public function logoeditAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $imageo = $em->getRepository('AcmeInfoBundle:Logo')->find($id);
        $image = new \Acme\InfoBundle\Entity\Logo();
        $image->setLogo('');
        $form = $this->createFormBuilder($image)
                ->add('logo','file')
                ->getForm();
        $form->handleRequest($request);
        $validator = $this->get('validator');
	$errors = $validator->validate($image);
        if (count($errors) > 1) {
            return $this->render('AcmeInfoBundle:Default:logoedit.html.twig', array('form' => $form->createView(),'id'=>$id,'logo'=>$imageo->getLogo()));
        }
        else
        {
            if($request->isMethod('POST')=='POST')
            {
               if($_FILES['form']['name']['logo'] != NULL)
                {
                    $a = $request->request->get('form');
                    
                    $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/logo/';
                    $em = $this->getDoctrine()->getManager();
                    $image = $em->getRepository('AcmeInfoBundle:Logo')->find($id);
                    $old_image = $image->getLogo();
                    unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/logo/'.$old_image);
                    $new_image = rand().'_'.$form['logo']->getData()->getClientOriginalName();    
                    $image = $this->getDoctrine()->getRepository('AcmeInfoBundle:Logo')->find($request->get('id'));
                    $image->setLogo($new_image);
                    if($a['status']==1){
                        $image->setStatus($a['status']);
                    }else{
                        $image->setStatus(0);
                    }
                    $em->flush();
                    $form->get('logo')->getData()->move($dir,$new_image);
		    $this->get('session')->getFlashBag()->set('success', 'Your Logo Update Successfully');	
                    return $this->redirect($this->generateUrl('acme_info_logo'));
                }else{	
		    $this->get('session')->getFlashBag()->set('success', 'Your Logo Update Successfully');	
                    return $this->redirect($this->generateUrl('acme_info_logo'));
                }
            }
        return $this->render('AcmeInfoBundle:Default:logoedit.html.twig', array('form' => $form->createView(),'id'=>$id,'logo'=>$imageo->getLogo()));     
        }
    }
    
    public function logodeleteAction(Request $request)
    {
        $id = $request->get('id');
	$em = $this->getDoctrine()->getManager();
        $image = $em->getRepository('AcmeInfoBundle:Logo')->find($id);
        $em->remove($image);
        $em->flush();
        unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/logo/'.$image->getLogo());
	$this->get('session')->getFlashBag()->add('notice','Logo Delete Successfully !');
        return $this->redirect($this->generateUrl('acme_info_logo'));
    }
}
