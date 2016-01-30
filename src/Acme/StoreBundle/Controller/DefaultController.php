<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Oneup\UploaderBundle\Event\PostPersistEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\Product;
use Acme\CategoryBundle\Entity\Category;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/* pagination */
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpKernel\Exception\HttpException;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        
        $order_by = '';
        //get Entity manager instance
        $em = $this->get('doctrine.orm.entity_manager');
        
        //get repository for class 'Language' : LanguageRepository.php
        $repository = $em->getRepository('Acme\StoreBundle\Entity\Product');
        
        //get count of languages for using with Paginator class
        //Using custom made database query function in LanguageRepository class
        $languagesCount = $repository->getIdCount();
        
        //When creating new paginator object it takes care for pages and items
        //organization based on numbers of items from database and limit variable in $_GET
        $paginator = new Product($languagesCount);
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
        $user = $this->container->get('security.context')->getToken()->getUser();
        $userId = $user->getId();
        $userName = $user->getUsername();
        if($userName=='admin'){
            $products = $this->get('doctrine')->getRepository('AcmeStoreBundle:Product')->findBy(array(), array('id' => 'DESC'));
        }else{
            $products = $this->get('doctrine')->getRepository('AcmeStoreBundle:Product')->findBy(array('userid'=>$userId), array('id' => 'DESC'));
        }
    	 
        //$products = $repository->getProductListWithPagination($sort_direction, $paginator->getOffset(), $paginator->getLimit());
        //return array('products' => $products, 'sort_dir' => $sort_direction, 'paginator' => $strPaginator);
        return $this->render('AcmeStoreBundle:Default:index.html.twig',array('products'=>$products,'sort_dir' => $sort_direction,'paginator'=>$strPaginator,'count'=>$languagesCount));
    }   
    
    public function addAction(Request $request)
    {
        $cateArray = array();
//        $category= $this->get('doctrine')->getRepository('AcmeCategoryBundle:Category')->findBy(array('status'=>1));
//        foreach($category as $key => $data):
//            $cateArray[$data->getId()] = $data->getName();
//        endforeach;
        $user = $this->container->get('security.context')->getToken()->getUser();
        $userId = $user->getId();
        $userName = $user->getUsername();
        if($userName=='admin'){
            $category= $this->get('doctrine')->getRepository('AcmeCategoryBundle:Category')->findAll();
        }else{
            $category= $this->get('doctrine')->getRepository('AcmeCategoryBundle:Category')->findBy(array('userid'=>$userId));
        }
        foreach($category as $key => $data):
            $cateArray[$data->getId()] = $data->getName();
        endforeach;
        $queue = $cateArray;
        array_unshift($queue, "select category");
        $cate = $queue;
        $products = new \Acme\StoreBundle\Entity\Product();
        $products->setCategory('');
        $products->setName('');
        $products->setPrice('');
        $products->setDescription('');
        $products->setImage('');
        $form = $this->createFormBuilder($products)
            ->add('category', 'choice', array('choices' => array('placeholder'=>'select category',''=>$cateArray)))
            //->add('category', 'choice', array('choices' => $cate,'data'=>$cateArray))
            ->add('name', 'text')
            ->add('price','text')
            ->add('description','textarea')
            ->add('image','file')
            ->getForm();
     $form->handleRequest($request);
     $validator = $this->get('validator');
     $errors = $validator->validate($products);
        if (count($errors) > 0) {
            return $this->render('AcmeStoreBundle:Default:add.html.twig', array('form' => $form->createView()));
        }else{
            $a = $request->request->get('form');
            $img = $form['image']->getData()->getClientOriginalName();
            $products = new Product();
            $products->setUserid($request->get('userid'));
            $products->setName($a['name']);
            $products->setCategory($a['category']);
            $products->setPrice($a['price']);
            $products->setDescription($a['description']);
            $products->setStatus('1');
            $products->setImage($img);
            $em = $this->getDoctrine()->getManager();
            $em->persist($products);
            $em->flush();
            $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/products/'.$products->getId();
            mkdir($dir);
            $form->get('image')->getData()->move($dir,$img);
            return $this->redirect($this->generateUrl('acme_store'));
        }
    	return $this->render('AcmeStoreBundle:Default:add.html.twig', array('form' => $form->createView()));
    }
    
    public function editAction(Request $request)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $userId = $user->getId();
        $userName = $user->getUsername();
        if($userName=='admin'){
            $category= $this->get('doctrine')->getRepository('AcmeCategoryBundle:Category')->findAll();
        }else{
            $category= $this->get('doctrine')->getRepository('AcmeCategoryBundle:Category')->findBy(array('userid'=>$userId));
        }
        //$category= $this->get('doctrine')->getRepository('AcmeCategoryBundle:Category')->findAll();
        foreach($category as $key => $data):
            $cateArray[$data->getId()] = $data->getName();
        endforeach;
        $queue = $cateArray;
        
        array_unshift($queue, "select category");
        $cate = $queue;
        
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AcmeStoreBundle:Product')->find($id);
        
        $oldimg = $product->getImage();
        
        $products = new \Acme\StoreBundle\Entity\Product();
        $products->setCategory('');
        $products->setName('');
        $products->setPrice('');
        $products->setDescription('');
        $products->setImage('');
        $form = $this->createFormBuilder($products)
            //->add('category', 'choice', array('choices' => array('placeholder'=>'select category',''=>$cateArray)))    
            //->add('category', 'choice', array('choices' => array('placeholder'=>'select category',''=>$cateArray)))    
            //->add('category', 'choice', array('choices' => $cate,'data'=>$product->getCategory()))    
            ->add('category', 'choice', array('choices' => $cateArray,'preferred_choices' => array($product->getCategory())))    
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
                    $products->setCategory($a['category']);
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
	
	public function deleteAction(Request $request)
	{
		$id = $request->get('id');
                $em = $this->getDoctrine()->getManager();
                $product = $em->getRepository('AcmeStoreBundle:Product')->find($id);
                $em->remove($product);
                $em->flush();
                if(is_file($_SERVER['DOCUMENT_ROOT'].'/uploads/products/'.$id.'/'.$product->getImage())){
                unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/products/'.$id.'/'.$product->getImage());
                rmdir($_SERVER['DOCUMENT_ROOT'].'/uploads/products/'.$id);
                }
                return $this->redirect($this->generateUrl('acme_store'));
	}
        
        public function sortingAction(Request $request)
        {
	    $em = $this->get('doctrine.orm.entity_manager');	
	    $repository = $em->getRepository('Acme\StoreBundle\Entity\Product');		
            //$request->get('sort').$request->get('type');
            if($request->get('sort')!='')
            {
               if($request->get('type') == 'asc')
               {
                   $order_by = $request->get('type'); 
		   $languagesCount = $repository->getIdCount();
                   $paginator = new Product($languagesCount);
                   $strPaginator = $paginator->RenderPaginator();
                   $sort_direction = "asc";
                   $products = $repository->getProductListWithPagination($order_by, $paginator->getOffset(), $paginator->getLimit());
                   return $this->render('AcmeStoreBundle:Default:index.html.twig',array('products'=>$products,'sort_dir' => $sort_direction,'paginator'=>$strPaginator,'page'=>$request->get('page')));
               }
               else
               {
		  $order_by = $request->get('type'); 	
                  $languagesCount = $repository->getIdCount();
                  $paginator = new Product($languagesCount);
                  $strPaginator = $paginator->RenderPaginator();
                  $sort_direction = "desc";
                  $products = $repository->getProductListWithPagination($order_by, $paginator->getOffset(), $paginator->getLimit());
                  return $this->render('AcmeStoreBundle:Default:index.html.twig',array('products'=>$products,'sort_dir' => $sort_direction,'paginator'=>$strPaginator,'page'=>$request->get('page')));
               }
            }
        }
        public function searchAction(Request $request)
        {
        if ($request->getMethod() == 'GET') {
            $keywords = $request->get('keywords');
            if($keywords != '')
            {
            $order_by = '';        
            $em = $this->get('doctrine.orm.entity_manager');
            $repository = $em->getRepository('Acme\StoreBundle\Entity\Product');
            $languagesCount = $repository->getIdCount();
            $paginator = new Product($languagesCount);
            $strPaginator = $paginator->RenderPaginator();
            $sort_direction = "asc";
            $products = $em->createQueryBuilder()
                ->select('b')
                ->from('AcmeStoreBundle:Product',  'b')
                ->where("b.name = :name")
                ->setParameter('name', $keywords )
                ->addOrderBy('b.id', 'DESC')
                ->getQuery()
                ->getResult();
                return $this->render('AcmeStoreBundle:Default:index.html.twig',array('products'=>$products,'sort_dir' => $sort_direction,'paginator'=>$strPaginator));
            }
            else
            {
                $order_by = '';
                $em = $this->get('doctrine.orm.entity_manager');
                $repository = $em->getRepository('Acme\StoreBundle\Entity\Product');
                $languagesCount = $repository->getIdCount();
                $paginator = new Product($languagesCount);
                $strPaginator = $paginator->RenderPaginator();
                $sort_direction = "asc";
                $products = $repository->getProductListWithPagination($sort_direction, $paginator->getOffset(), $paginator->getLimit());
                return $this->render('AcmeStoreBundle:Default:index.html.twig',array('products'=>$products,'sort_dir' => $sort_direction,'paginator'=>$strPaginator)); 
            }
        }
       }

       public function statusAction(Request $request)
        {
		$id = $request->get('id');
		$stat = $request->get('stat');
		if($stat == '0')
		{
			$em = $this->getDoctrine()->getManager();
			$product = $em->getRepository('AcmeStoreBundle:Product')->find($id);
			$product->setStatus('1');
			$em->flush();
		}
		else
		{
			$em = $this->getDoctrine()->getManager();
			$product = $em->getRepository('AcmeStoreBundle:Product')->find($id);
			$product->setStatus('0');
			$em->flush();
		}	
		return $this->redirect($this->generateUrl('acme_store'));	
	}
        
        public function ordersAction(Request $request)
        {
            $user = $this->container->get('security.context')->getToken()->getUser();
            $userId = $user->getId();
            $userName = $user->getUsername();
            if($userName=='admin'){
                $em = $this->getDoctrine()->getManager();
                $orders = $em->getRepository('AcmeHomeBundle:Cart')->findAll();
                return $this->render('AcmeStoreBundle:Default:orders.html.twig',array('orders'=>$orders)); 
            }else{
                return $this->render('AcmeStoreBundle:Default:error.html.twig'); 
            }
        }
        
        public function orderDeleteAction(Request $request)
	{
		$id = $request->get('id');
                $em = $this->getDoctrine()->getManager();
                $order = $em->getRepository('AcmeHomeBundle:Cart')->find($id);
                $em->remove($order);
                $em->flush();
                return $this->redirect($this->generateUrl('acme_store_orders'));
	}
        
        public function orderDetailAction(Request $request)
        {
            $orderId = $request->get('id');
            $em = $this->getDoctrine()->getManager();
            $order = $em->getRepository('AcmeHomeBundle:Cart')->find($orderId);
            $product = $em->getRepository('AcmeStoreBundle:Product')->find($order->getProductId());
            $category = $em->getRepository('AcmeCategoryBundle:Category')->find($order->getCategoryId());
            return $this->render('AcmeStoreBundle:Default:orderdetail.html.twig',array('order'=>$order,'productName'=>$product->getName(),'category'=>$category->getName()));
        }
}
