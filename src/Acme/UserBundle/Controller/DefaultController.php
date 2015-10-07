<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        echo "etest";exit;
        return $this->render('AcmeUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
