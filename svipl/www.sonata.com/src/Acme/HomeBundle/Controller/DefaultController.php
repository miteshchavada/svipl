<?php

namespace Acme\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\InfoBundle\Entity\News;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Oneup\UploaderBundle\Event\PostPersistEvent;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Symfony\Component\Form\Form;
use Acme\HomeBundle\Entity\Contact;

/* pagination */
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpKernel\Exception\HttpException;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $images = $this->get('doctrine')->getRepository('AcmeImageBundle:Image')->findAll();
        $info = $this->get('doctrine')->getRepository('AcmeInfoBundle:Info')->findAll();
        $recentWorks = $this->get('doctrine')->getRepository('AcmeInfoBundle:Services')->findAll();
	$front = $this->get('doctrine')->getRepository('AcmeInfoBundle:Front')->findAll();
        $logo = $this->get('doctrine')->getRepository('AcmeInfoBundle:Logo')->findOneByStatus(1);
	$testimonials = $this->get('doctrine')->getRepository('AcmeInfoBundle:Testimonials')->findAll();
        $peoples = $this->get('doctrine')->getRepository('AcmeInfoBundle:People')->findAll();
        $works = $this->get('doctrine')->getRepository('AcmeInfoBundle:Work')->findAll();
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
        }
        return $this->render('AcmeHomeBundle:Default:index.html.twig',array('images'=>$images,'info'=>$info,'front'=>$front,'testimonials'=>$testimonials,'logo'=>$logo,'recentWorks'=>$recentWorks,'peoples'=>$peoples,'works'=>$works,'contents'=>$contents));
    }
    public function aboutusAction(Request $request)
    {
        $teams = $this->get('doctrine')->getRepository('AcmeTeamBundle:Team')->findAll();
        $info = $this->get('doctrine')->getRepository('AcmeInfoBundle:Info')->findAll();
        $logo = $this->get('doctrine')->getRepository('AcmeInfoBundle:Logo')->findOneByStatus(1);
        return $this->render('AcmeHomeBundle:Default:aboutus.html.twig',array('logo'=>$logo,'skills'=>$info,'teams'=>$teams));
    }
    public function servicesAction()
    {
        $logo = $this->get('doctrine')->getRepository('AcmeInfoBundle:Logo')->findOneByStatus(1);
	$services = $this->get('doctrine')->getRepository('AcmeInfoBundle:Services')->findAll();	
	return $this->render('AcmeHomeBundle:Default:services.html.twig',array('services'=>$services,'logo'=>$logo));
    }
    public function portfolioAction(Request $request)
    {
        $logo = $this->get('doctrine')->getRepository('AcmeInfoBundle:Logo')->findOneByStatus(1);
        return $this->render('AcmeHomeBundle:Default:portfolio.html.twig',array('logo'=>$logo));
    }
    public function blogAction(Request $request)
    {
        $logo = $this->get('doctrine')->getRepository('AcmeInfoBundle:Logo')->findOneByStatus(1);
        $order_by = '';
        $em = $this->get('doctrine.orm.entity_manager');
        $repository = $em->getRepository('Acme\InfoBundle\Entity\News');
        $paginator = new News($languagesCount);
        $strPaginator = $paginator->RenderPaginator();
        $sort_direction = "asc";
        $blog = $this->get('doctrine')->getRepository('AcmeInfoBundle:News')->findAll();
        $page = $languagesCount/3;
        return $this->render('AcmeHomeBundle:Default:blog.html.twig',array('blog'=>$blog,'sort_dir' => $sort_direction,'paginator'=>$strPaginator,'count'=>$languagesCount,'page'=>$page,'logo'=>$logo));
    }
    public function pricingAction(Request $request)
    {
        $logo = $this->get('doctrine')->getRepository('AcmeInfoBundle:Logo')->findOneByStatus(1);
        return $this->render('AcmeHomeBundle:Default:pricing.html.twig',array('logo'=>$logo));
    }
    public function shortcodesAction(Request $request)
    {
        return $this->render('AcmeHomeBundle:Default:shortcodes.html.twig');
    }
    public function contactusAction(Request $request)
    {
        $logo = $this->get('doctrine')->getRepository('AcmeInfoBundle:Logo')->findOneByStatus(1);
	//$contactus = $this->get('doctrine')->getRepository('AcmeInfoBundle:Contactus')->findAll();
        $filePath= $_SERVER['DOCUMENT_ROOT'].'/uploads/cms';
        $fileName = 'address.txt';
        $f = $filePath.'/'.$fileName;
        $handle = fopen($f, "r");
        $contactus = fread($handle, filesize($f));
        return $this->render('AcmeHomeBundle:Default:contactus.html.twig',array('contactus'=>$contactus,'logo'=>$logo));
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
        /*if ('POST' === $this->get('request')->getMethod()) {
        $order_by = array($_POST['filter_order'] => $_POST['filter_order_Dir']);
        $sort_direction = $_POST['filter_order_Dir'] == 'asc' ? 'desc' : 'asc';
        } else {
        //We know that nothing is changed for ordering columns -
        //this is alse default order of items when page is first opened
        $order_by = array('sort_order' => 'asc', 'id' => 'asc');
        $sort_direction = 'desc';
        }*/
        //To fill $languages for forwarding it to the template, we first call database function
        //with $offset and $limit to get items we wanted
        //$languages = $repository->getProductListWithPagination($order_by, $paginator->getOffset(), $paginator->getLimit());
        //Finally - return array to templating engine for displaying data.
        
    	 $news = $this->get('doctrine')->getRepository('AcmeInfoBundle:News')->findAll();
    	 $page = $languagesCount/3;
	 
         $news = $repository->getProductListWithPagination($sort_direction, $paginator->getOffset(), $paginator->getLimit());
	 return $this->render('AcmeHomeBundle:Default:news.html.twig',array('news'=>$news,'sort_dir' => $sort_direction,'paginator'=>$strPaginator,'count'=>$languagesCount,'page'=>$page));
    }
    
    
    public function productsAction()
    {
        $products = $this->get('doctrine')->getRepository('AcmeStoreBundle:Product')->findAll();
        return $this->render('AcmeHomeBundle:Default:products.html.twig',array('products'=>$products));
    }
    

    public function sendEmailAction(Request $request)
    {
	$body = array($request->get('name'),$request->get('city'),$request->get('email'),$request->get('description'));
	
	$message = \Swift_Message::newInstance()
		->setSubject('Hello Email')
		->setFrom($request->get('email'))
		->setTo('mitesh_chavada2009@yahoo.com')
		->setBody($body);
	$this->get('mailer')->send($message);
	$this->get('session')->getFlashBag()->add('notice','Thanx For ContactUs');
	return $this->redirect($this->generateUrl('contact'));
    }
}
