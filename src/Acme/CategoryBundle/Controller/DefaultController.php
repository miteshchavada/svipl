<?php

namespace Acme\CategoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Acme\CategoryBundle\Form\CategoryType;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\CategoryBundle\Entity\Category;
use Acme\StoreBundle\Entity\Product;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Session\Session;
class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $userId = $user->getId();
        $userName = $user->getUsername();
        if($userName=='admin'){
            $category = $this->get('doctrine')->getRepository('AcmeCategoryBundle:Category')->findBy(array(), array('id' => 'DESC'));
        }else{
            $category = $this->get('doctrine')->getRepository('AcmeCategoryBundle:Category')->findBy(array('userid'=>$userId), array('id' => 'DESC'));
        }
        return $this->render('AcmeCategoryBundle:Default:index.html.twig',array('category'=>$category));
        //return $this->render('AcmeCategoryBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function addAction(Request $request)
    {
        $category = new \Acme\CategoryBundle\Entity\Category();
        $category->setName('');
        $form = $this->createFormBuilder($category)
            ->add('name', 'text')
            ->add('status', 'checkbox')    
            ->getForm();
        $form->handleRequest($request);
        $validator = $this->get('validator');
        $errors = $validator->validate($category);
        if (count($errors) > 0) {
            return $this->render('AcmeCategoryBundle:Default:add.html.twig', array('form' => $form->createView()));
        }else{
            $a = $request->request->get('form');
            $category = new Category();
            $category->setUserid($request->get('userid'));
            $category->setName($a['name']);
            if($a['status']){
                $category->setStatus($a['status']);
            }else{
                $category->setStatus('');
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
	    $this->get('session')->getFlashBag()->set('success', 'Your Record Add Successfully');	
            return $this->redirect($this->generateUrl('acme_category'));
        }
        return $this->render('AcmeCategoryBundle:Default:add.html.twig',array('form' => $form->createView()));
        //return $this->render('AcmeCategoryBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function editAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('AcmeCategoryBundle:Category')->find($id);
        
        $form = $this->createForm(new \Acme\CategoryBundle\Form\CategoryType());
        $form->add('name','text',array('data'=>$category->getName()));
        if($category->getStatus()==1){
        $form->add('status','checkbox',array('attr'=>array('checked'=>$category->getStatus() == 0 ? 'checked' : 'unchecked')));
        }else{
            $form->add('status','checkbox');
        }
        $form->handleRequest($request);
        $validator = $this->get('validator');
        $errors = $validator->validate($category);
        
        if($request->getMethod() == 'POST')
        {
            $a = $request->request->get('acme_categorybundle_category');
            $categorys = $em->getRepository('AcmeCategoryBundle:Category')->find($id);
            $categorys->setName($a['name']);
            $categorys->setStatus($a['status']);
            $em->persist($categorys);
            $em->flush();
	    $this->get('session')->getFlashBag()->set('success', 'Your Record Update Successfully');
            return $this->redirect($this->generateUrl('acme_category'));
        }else{
            return $this->render('AcmeCategoryBundle:Default:edit.html.twig', array('form' => $form->createView(),'id'=>$id,'category'=>$category));
        }
        
    }
    
    public function statusAction(Request $request)
    {       
            $id = $request->get('id');
            $em = $this->getDoctrine()->getManager();
            $categoryStatus = $em->getRepository('AcmeCategoryBundle:Category')->find($id);
            $stat = $categoryStatus->getStatus();
            if($stat == '1')
            {
		    $status = "Disable";	
                    $em = $this->getDoctrine()->getManager();
                    $category = $em->getRepository('AcmeCategoryBundle:Category')->find($id);
                    $category->setStatus('0');
                    $em->flush();
            }
            else
            {
		    $status = "Enable";	
                    $em = $this->getDoctrine()->getManager();
                    $category = $em->getRepository('AcmeCategoryBundle:Category')->find($id);
                    $category->setStatus('1');
                    $em->flush();
            }
            //echo "true";
            $response = array("code" => 100, "success" => true, "status" => $categoryStatus->getStatus(), "id" => $categoryStatus->getId(), 'success' => $this->get('session')->getFlashBag()->set('success', 'Your '.$category->getName().' Status '.$status.' Successfully'));
            return new Response(json_encode($response)); 
    }
    
    public function deleteAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        
        $category = $em->getRepository('AcmeCategoryBundle:Category')->find($id);
        if($category->getStatus()==0){
            $this->get('session')->getFlashBag()->add('notice','Please First Category Enable!');
            return $this->redirect($this->generateUrl('acme_category'));
        }else{
            $em->remove($category);
            $em->flush();

            $product = $em->getRepository('AcmeStoreBundle:Product')->findByCategory($id);
            foreach ($product as $user_service) {
                unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/products/'.$user_service->getId().'/'.$user_service->getImage());
                rmdir($_SERVER['DOCUMENT_ROOT'].'/uploads/products/'.$user_service->getId());
                $em->remove($user_service);
            }
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice','Category Delete Successfully !');
            return $this->redirect($this->generateUrl('acme_category'));
        }
    }
}
