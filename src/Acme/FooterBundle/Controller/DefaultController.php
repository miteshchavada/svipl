<?php

namespace Acme\FooterBundle\Controller;
use Acme\FooterBundle\Form\Followus;
use Acme\FooterBundle\Form\FollowusType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeFooterBundle:Default:index.html.twig');
    }
    
    public function followusAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $followus = $em->getRepository('AcmeFooterBundle:Followus')->findAll();
        return $this->render('AcmeFooterBundle:Default:followus.html.twig',array('followus'=>$followus));
    }
    
    public function addressAction(Request $request)
    {
        if($request->getMethod()=='POST'){
            $filePath= $_SERVER['DOCUMENT_ROOT'].'/uploads/cms';
            $fileName = 'address.txt';
            $f = $filePath.'/'.$fileName;
            $handle = fopen($f, "w");
            fwrite($handle,$request->get('description'));
            fclose($handle);
            return $this->render('AcmeFooterBundle:Default:address.html.twig',array('contents'=>$request->get('description')));
        }
        //$file = $_SERVER['DOCUMENT_ROOT'].'/uploads/cms/address.txt';
        $filePath= $_SERVER['DOCUMENT_ROOT'].'/uploads/cms';
        $fileName = 'address.txt';
        $f = $filePath.'/'.$fileName;
        $handle = fopen($f, "r");
        $contents = fread($handle, filesize($f));
        if(file_exists($f) AND filesize($f) > 0)
        {
                $handle = fopen($f, "r");
                $contents = fread($handle, filesize($f));
                fclose($handle);
                return $this->render('AcmeFooterBundle:Default:address.html.twig',array('contents'=>$contents));
        }
        return $this->render('AcmeFooterBundle:Default:address.html.twig',array('contents'=>$contents));
    }
    
    public function whyusAction(Request $request)
    {
        if($request->getMethod()=='POST'){
            $filePath= $_SERVER['DOCUMENT_ROOT'].'/uploads/cms';
            $fileName = 'whyus.txt';
            $f = $filePath.'/'.$fileName;
            $handle = fopen($f, "w");
            fwrite($handle,$request->get('description'));
            fclose($handle);
            return $this->render('AcmeFooterBundle:Default:whyus.html.twig',array('contents'=>$request->get('description')));
        }
        //$file = $_SERVER['DOCUMENT_ROOT'].'/uploads/cms/address.txt';
        $filePath= $_SERVER['DOCUMENT_ROOT'].'/uploads/cms';
        $fileName = 'whyus.txt';
        $f = $filePath.'/'.$fileName;
        $handle = fopen($f, "r");
        $contents = fread($handle, filesize($f));
        if(file_exists($f) AND filesize($f) > 0)
        {
                $handle = fopen($f, "r");
                $contents = fread($handle, filesize($f));
                fclose($handle);
                return $this->render('AcmeFooterBundle:Default:whyus.html.twig',array('contents'=>$contents));
        }
        return $this->render('AcmeFooterBundle:Default:whyus.html.twig',array('contents'=>$contents));
    }
    
    public function followusaddAction(Request $request){
        $followus = new \Acme\FooterBundle\Entity\Followus();
            $followus->setTitle('');
            $followus->setLogo('');
            $followus->setLink('');
            $form = $this->createFormBuilder($followus)
                ->add('title', 'text')
                ->add('logo','file')
                ->add('link', 'text')    
                ->getForm();
         $form->handleRequest($request);
         $validator = $this->get('validator');
         $errors = $validator->validate($followus);
         if (count($errors) > 0) {
                return $this->render('AcmeFooterBundle:Default:followusadd.html.twig', array('form' => $form->createView()));
        }else{
                $a = $request->request->get('form');
                $img = $form['logo']->getData()->getClientOriginalName();
                $follow = new \Acme\FooterBundle\Entity\Followus();
                $follow->setTitle($a['title']);
                $follow->setLogo($img);
                $follow->setLink($a['link']);
                $follow->setStatus('1');
                $em = $this->getDoctrine()->getManager();
                $em->persist($follow);
                $em->flush();
                $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/follow/'.$follow->getId();
                mkdir($dir);
                $form->get('logo')->getData()->move($dir,$img);
                return $this->redirect($this->generateUrl('acme_footer_followus'));
        }
        return $this->render('AcmeFooterBundle:Default:followusadd.html.twig',array('form'=>$form->createView()));
    }
    public function followstatusAction(Request $request)
    {   
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $followStatus = $em->getRepository('AcmeFooterBundle:Followus')->find($id);
        $stat = $followStatus->getStatus();
        if($stat == '1')
        {
                $em = $this->getDoctrine()->getManager();
                $follow = $em->getRepository('AcmeFooterBundle:Followus')->find($id);
                $follow->setStatus('0');
                $em->flush();
        }
        else
        {
                $em = $this->getDoctrine()->getManager();
                $follow = $em->getRepository('AcmeFooterBundle:Followus')->find($id);
                $follow->setStatus('1');
                $em->flush();
        }
        //echo "true";
        $response = array("code" => 100, "success" => true, "status" => $followStatus->getStatus(), "id" => $followStatus->getId());
        //you can return result as JSON
        return new Response(json_encode($response)); 
    }
    
    public function followeditAction(Request $request)
    {
	$id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $follow = $em->getRepository('AcmeFooterBundle:Followus')->find($id);
        $oldlogo = $follow->getLogo();
        $followus = new \Acme\FooterBundle\Entity\Followus();
        $followus->setTitle($follow->getTitle());
        $followus->setLink($follow->getLink());
        $form = $this->createFormBuilder($followus)
        ->add('title', 'text')
        ->add('logo','file', array('error_bubbling' => TRUE))
        ->add('link','text')                 
        ->getForm();
        $form->handleRequest($request);
        $validator = $this->get('validator');
        $errors = $validator->validate($followus);
        if($request->getMethod() == 'POST')
        {
            if (count($errors) > 1) {
                return $this->render('AcmeFooterBundle:Default:followusedit.html.twig', array('form' => $form->createView(),'follow'=>$follow,'id'=>$id,'image'=>$oldlogo));
            }else{
                if($_FILES['form']['name']['logo'])
		{
			$follow = $em->getRepository('AcmeFooterBundle:Followus')->find($id);
                        if(file_exists($_SERVER['DOCUMENT_ROOT'].'/uploads/follow/'.$follow->getId().'/'.$oldlogo)){
                            unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/follow/'.$follow->getId().'/'.$oldlogo);
                        }
			$newlogo = $form['logo']->getData()->getClientOriginalName();
                        $follow->setLogo($newlogo);
			$em->persist($follow);
                        $em->flush();
			$img = $form['logo']->getData()->getClientOriginalName();
		        $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/follow/'.$follow->getId().'/';
		        $form->get('logo')->getData()->move($dir,$img);
			return $this->redirect($this->generateUrl('acme_footer_followus'));
                }
		else
		{
			$a = $request->request->get('form');
                        $follow->setLogo($oldlogo);
			$follow->setTitle($a['title']);
			$follow->setLink($a['link']);
                        $follow->setStatus($follow->getStatus());
			$em->persist($follow);
                        $em->flush();
			return $this->redirect($this->generateUrl('acme_footer_followus'));
		}
            }
        }   
        return $this->render('AcmeFooterBundle:Default:followusedit.html.twig', array('form' => $form->createView(),'follow'=>$follow,'id'=>$id,'image'=>$oldlogo));
    }
    
    public function followdeleteAction(Request $request)
    {
	$id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $follow = $em->getRepository('AcmeFooterBundle:Followus')->find($id);
        $em->remove($follow);
        $em->flush();
        if(is_file($_SERVER['DOCUMENT_ROOT'].'/uploads/follow/'.$id.'/'.$follow->getLogo())){
        	unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/follow/'.$id.'/'.$follow->getLogo());
                rmdir($_SERVER['DOCUMENT_ROOT'].'/uploads/follow/'.$id);
        }
        return $this->redirect($this->generateUrl('acme_footer_followus'));
    }
}
