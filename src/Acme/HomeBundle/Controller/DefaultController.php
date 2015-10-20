<?php

namespace Acme\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\InfoBundle\Entity\News;
use Acme\HomeBundle\Entity\Newsletter;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Oneup\UploaderBundle\Event\PostPersistEvent;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;
/* pagination */
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpKernel\Exception\HttpException;

/* security */
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // for address content read start
        $filePath= $_SERVER['DOCUMENT_ROOT'].'/uploads/cms';
        $addressFile = 'address.txt';
        $addFile = $filePath.'/'.$addressFile;
        $handle = fopen($addFile, "r");
        $address = fread($handle, filesize($addFile));        
        // for address content read end
        
        // for whyus content read start
        $filePath= $_SERVER['DOCUMENT_ROOT'].'/uploads/cms';
        $whyusFile = 'whyus.txt';
        $whyFile = $filePath.'/'.$whyusFile;
        $handle = fopen($whyFile, "r");
        $whyus = fread($handle, filesize($whyFile));
        // for address content read end
        
        $request = $this->container->get('request');
        /* @var $request \Symfony\Component\HttpFoundation\Request */
        $session = $request->getSession();
        /* @var $session \Symfony\Component\HttpFoundation\Session\Session */
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);
        //$logo = $this->get('doctrine')->getRepository('AcmeInfoBundle:Logo')->findAll('status=1');
        //$homePageLogo = $logo[0]->getLogo();
        $homePageLogo = '';
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT u.logo FROM AcmeInfoBundle:Logo u WHERE u.status = 1');

        $users = $query->getResult();
        $homePageLogo = $users[0]['logo'];
        $followus = $this->get('doctrine')->getRepository('AcmeFooterBundle:Followus')->findBy(array('status'=>'1'));
        $images = $this->get('doctrine')->getRepository('AcmeImageBundle:Image')->findAll();
        $info = $this->get('doctrine')->getRepository('AcmeInfoBundle:Info')->findAll();
	$front = $this->get('doctrine')->getRepository('AcmeInfoBundle:Front')->findAll();
	$testimonials = $this->get('doctrine')->getRepository('AcmeInfoBundle:Testimonials')->findAll();
        return $this->render('AcmeHomeBundle:Default:index.html.twig',array('images'=>$images,'info'=>$info,'front'=>$front,'testimonials'=>$testimonials,'last_username'=>$lastUsername,'logo'=>$homePageLogo,'address'=>$address,'whyus'=>$whyus,'followus'=>$followus));
    }
    public function newsAction(Request $request)
    {
	 $news = $this->get('doctrine')->getRepository('AcmeInfoBundle:News')->findAll();
	 $order_by = '';
        //get Entity manager instance
        $em = $this->get('doctrine.orm.entity_manager');
        
        //get repository for class 'Language' : LanguageRepository.php
        $repository = $em->getRepository('Acme\InfoBundle\Entity\News');
        
        //get count of languages for using with Paginator class
        //Using custom made database query function in LanguageRepository class
        $languagesCount = $repository->getIdCount();
        
        //When creating new paginator object it takes care for pages and items
        //organization based on numbers of items from database and limit variable in $_GET
        $paginator = new News($languagesCount);
        //get returned HTML string from Paginator to render paginator HTML
        //elements in the template
        
        $strPaginator = $paginator->RenderPaginator();
        //If we have POST variable defined, than it is defined order of items
        //from inside form (clicking on sorting column for example)
        
         $sort_direction = "asc";
         $news = $this->get('doctrine')->getRepository('AcmeInfoBundle:News')->findAll();
    	 $page = $languagesCount/3;
	 
         $news = $repository->getProductListWithPagination($sort_direction, $paginator->getOffset(), $paginator->getLimit());
	 $newsletter = new \Acme\HomeBundle\Entity\Newsletter();
         $newsletter->setEmail('');
	 $form = $this->createFormBuilder($newsletter)
                ->add('email')
                ->getForm();
        $form->handleRequest($request);
        $validator = $this->get('validator');
	$errors = $validator->validate($newsletter);
	if (count($errors) > 0) {
            return $this->render('AcmeHomeBundle:Default:news.html.twig',array('news'=>$news,'sort_dir' => $sort_direction,'paginator'=>$strPaginator,'count'=>$languagesCount,'page'=>$page,'form' => $form->createView()));
        }
        else
        {	
            if($request->getMethod() == 'POST')
            {
               $a = $request->request->get('form');
               $add = Newsletter::addNewsletter($a['email']);
               return $this->render('AcmeHomeBundle:Default:news.html.twig',array('news'=>$news,'sort_dir' => $sort_direction,'paginator'=>$strPaginator,'count'=>$languagesCount,'page'=>$page,'form' => $form->createView()));    
            }
        }
	 return $this->render('AcmeHomeBundle:Default:news.html.twig',array('news'=>$news,'sort_dir' => $sort_direction,'paginator'=>$strPaginator,'count'=>$languagesCount,'page'=>$page,'form' => $form->createView()));
    }
    public function servicesAction(Request $request)
    {
	 $services = $this->get('doctrine')->getRepository('AcmeInfoBundle:Services')->findAll();	
         $newsletter = new \Acme\HomeBundle\Entity\Newsletter();
         $newsletter->setEmail('');
	 $form = $this->createFormBuilder($newsletter)
                ->add('email')
                ->getForm();
	$form = $this->createFormBuilder($newsletter)->add('email')->getForm();
        $form->handleRequest($request);
        $validator = $this->get('validator');
	$errors = $validator->validate($newsletter);
	if (count($errors) > 0) {
            return $this->render('AcmeHomeBundle:Default:services.html.twig',array('services'=>$services,'form' => $form->createView()));
        }
        else
        {	
            if($request->getMethod() == 'POST')
            {
               $a = $request->request->get('form');
               $add = Newsletter::addNewsletter($a['email']);
               return $this->render('AcmeHomeBundle:Default:services.html.twig',array('services'=>$services,'form' => $form->createView()));
            }
        }
	 return $this->render('AcmeHomeBundle:Default:services.html.twig',array('services'=>$services,'form' => $form->createView()));
	 //return $this->render('AcmeHomeBundle:Default:services.html.twig',array('services'=>$services));
    }
    public function productsAction(Request $request)
    {
        $products = $this->get('doctrine')->getRepository('AcmeStoreBundle:Product')->findAll();
	$newsletter = new \Acme\HomeBundle\Entity\Newsletter();
         $newsletter->setEmail('');
	 $form = $this->createFormBuilder($newsletter)
                ->add('email')
                ->getForm();
        $form->handleRequest($request);
	$form = $this->createFormBuilder($newsletter)->add('email')->getForm();
        $validator = $this->get('validator');
	$errors = $validator->validate($newsletter);
	if (count($errors) > 0) {
            return $this->render('AcmeHomeBundle:Default:products.html.twig',array('products'=>$products,'form' => $form->createView()));
        }
        else
        {	
            if($request->getMethod() == 'POST')
            {
               $a = $request->request->get('form');
               $add = Newsletter::addNewsletter($a['email']);
               return $this->render('AcmeHomeBundle:Default:products.html.twig',array('products'=>$products,'form' => $form->createView()));
            }
        }
        return $this->render('AcmeHomeBundle:Default:products.html.twig',array('products'=>$products,'form' => $form->createView()));
    }
    public function contactAction(Request $request)
    {
	$contactus = $this->get('doctrine')->getRepository('AcmeInfoBundle:Contactus')->findAll();
	$newsletter = new \Acme\HomeBundle\Entity\Newsletter();
        $newsletter->setEmail('');
	$form = $this->createFormBuilder($newsletter)
                ->add('email')
                ->getForm();
        $form->handleRequest($request);
	$form = $this->createFormBuilder($newsletter)->add('email')->getForm();
        $validator = $this->get('validator');
	$errors = $validator->validate($newsletter);
	if (count($errors) > 0) {
            return $this->render('AcmeHomeBundle:Default:contact.html.twig',array('contactus'=>$contactus,'form' => $form->createView()));
        }
        else
        {	
            if($request->getMethod() == 'POST')
            {
               $a = $request->request->get('form');
               $add = Newsletter::addNewsletter($a['email']);
               return $this->render('AcmeHomeBundle:Default:contact.html.twig',array('contactus'=>$contactus,'form' => $form->createView()));
            }
        }
	return $this->render('AcmeHomeBundle:Default:contact.html.twig',array('contactus'=>$contactus,'form' => $form->createView()));
    }

    public function sendEmailAction(Request $request)
    {
        $messages = array($request->get('name'),$request->get('city'),$request->get('email'),$request->get('description'));
//        $message = '';
//        $message .= "Name:- ".$request->get('name');
//        $message .= "City:- ".$request->get('city');
//        $message .= "Email:- ".$request->get('email');
//        $message .= "Description:- ".$request->get('description');
        $message = \Swift_Message::newInstance()
		->setSubject('Hello Email')
		->setFrom($request->get('email'))
		->setTo('employee.svipl@gmail.com')
		->setBody(
                    $this->renderView(
                        'Emails/registration.html.twig',
                        array('messages' => $messages)
                    ),
                    'text/html'
                );
        $this->get('mailer')->send($message);
	$this->get('session')->getFlashBag()->add('notice','Thanx For ContactUs');
	return $this->redirect($this->generateUrl('contact'));
    }
    
    public function agentloginAction(Request $request)
    {
        $request = $this->container->get('request');
        /* @var $request \Symfony\Component\HttpFoundation\Request */
        $session = $request->getSession();
        /* @var $session \Symfony\Component\HttpFoundation\Session\Session */

        // get the error if any (works with forward and redirect -- see below)
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } elseif (null !== $session && $session->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        if ($error) {
            // TODO: this is a potential security risk (see http://trac.symfony-project.org/ticket/9523)
            $error = $error->getMessage();
        }
        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);

        $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');
        return $this->render('AcmeHomeBundle:Default:agentlogin.html.twig',array(
            'last_username' => $lastUsername,
            'error'         => $error,
            'csrf_token' => $csrfToken,
        ));
    }
    
    public function agentlogoutAction(Request $request)
    {
        $this->get('security.context')->setToken(null);
        $this->get('request')->getSession()->invalidate();
        return $this->redirect($this->generateUrl('acme_home'));
    }
}
