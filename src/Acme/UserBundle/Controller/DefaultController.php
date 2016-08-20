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
		    $status = "Disable";
                    $em = $this->getDoctrine()->getManager();
                    $product = $em->getRepository('AcmeUserBundle:User')->find($id);
                    $product->setEnabled('0');
		    $this->get('session')->getFlashBag()->set('success', 'User '.$product->getUsername().' Status '.$status.' Successfully');	
                    $em->flush();
            }
            else
            {
		    $status = "Enable";
                    $em = $this->getDoctrine()->getManager();
                    $product = $em->getRepository('AcmeUserBundle:User')->find($id);
                    $product->setEnabled('1');
		    $this->get('session')->getFlashBag()->set('success', 'User '.$product->getUsername().' Status '.$status.' Successfully');	
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
}
