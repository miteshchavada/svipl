<?php

namespace Acme\UserBundle\Controller;
use FOS\UserBundle\Model\UserManager as BaseUserManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Acme\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT u FROM AcmeUserBundle:User u WHERE u.roles NOT LIKE :role'
            )->setParameter('role', '%"ROLE_ADMIN"%');

        $users = $query->getResult();
        
        //$repository = $this->getDoctrine()->getRepository('AcmeUserBundle:User');
	//$users = $repository->findAll();
        return $this->render('AcmeUserBundle:Default:index.html.twig', array('users' => $users));
    }
    
    public function statusAction(Request $request)
    {       
            $id = $request->get('id');
            $em = $this->getDoctrine()->getManager();
            $userStatus = $em->getRepository('AcmeUserBundle:User')->find($id);
            $stat = $userStatus->isEnabled();
            if($stat == '1')
            {
                    $em = $this->getDoctrine()->getManager();
                    $product = $em->getRepository('AcmeUserBundle:User')->find($id);
                    $product->setEnabled('0');
                    $em->flush();
            }
            else
            {
                    $em = $this->getDoctrine()->getManager();
                    $product = $em->getRepository('AcmeUserBundle:User')->find($id);
                    $product->setEnabled('1');
                    $em->flush();
            }
            //echo "true";
            $response = array("code" => 100, "success" => true, "status" => $product->isEnabled(), "id" => $product->getId());
            //you can return result as JSON
            return new Response(json_encode($response)); 
            //return $this->redirect($this->generateUrl('acme_user'));	
    }
    
    public function deleteAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AcmeUserBundle:User')->find($id);
        $em->remove($user);
        $em->flush();
        $this->get('session')->getFlashBag()->add('notice','User Delete Successfully !');
        return $this->redirect($this->generateUrl('acme_user'));
    }
    
    public function editAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AcmeUserBundle:User')->find($id);
        $products = new \Acme\UserBundle\Entity\User();
        $products->setName('');
        $products->setPrice('');
        $products->setDescription('');
        $products->setImage('');
        $form = $this->createFormBuilder($products)
            ->add('name', 'text')
            ->add('price','text')
            ->add('description','textarea')
            ->add('image','file', array('error_bubbling' => TRUE))
            ->getForm();
            $form->handleRequest($request);
            $validator = $this->get('validator');
            $errors = $validator->validate($products);
            if($request->getMethod() == 'POST')
            {
                if (count($errors) > 1) {
                    return $this->render('AcmeStoreBundle:Default:edit.html.twig', array('form' => $form->createView(),'products'=>$products,'product'=>$product,'id'=>$id,'image'=>$oldimg));
                }else{    
                    $a = $request->request->get('form');
                    $products = $em->getRepository('AcmeStoreBundle:Product')->find($id);
                    if($_FILES['form']['name']['image'] != NULL)
                    {
                        $products->setImage($_FILES['form']['name']['image']);
                        if(is_file($_SERVER['DOCUMENT_ROOT'].'/uploads/products/'.$id.'/'.$oldimg)){
                            unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/products/'.$id.'/'.$oldimg);
                            rmdir($_SERVER['DOCUMENT_ROOT'].'/uploads/products/'.$id);    
                            $img = $form['image']->getData()->getClientOriginalName();
                            $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/products/'.$products->getId();
                            mkdir($dir);
                            $form->get('image')->getData()->move($dir,$img);
                        }
                    }
                    else
                    {
                        $products->setImage($oldimg);
                    }
                    $products->setName($a['name']);
                    $products->setPrice($a['price']);
                    $products->setDescription($a['description']);
                    $products->setStatus('1');
                    $em->persist($products);
                    $em->flush();
                }
                return $this->redirect($this->generateUrl('acme_store'));
            }
        return $this->render('AcmeStoreBundle:Default:edit.html.twig', array('form' => $form->createView(),'products'=>$products,'product'=>$product,'id'=>$id,'image'=>$oldimg));
	}
}
