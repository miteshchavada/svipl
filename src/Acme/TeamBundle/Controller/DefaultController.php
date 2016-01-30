<?php

namespace Acme\TeamBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Form\Form;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpKernel\Exception\HttpException;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $team = $this->get('doctrine')->getRepository('AcmeTeamBundle:Team')->findAll();
        return $this->render('AcmeTeamBundle:Default:index.html.twig',array('team'=>$team));
    }
    
    public function addAction(Request $request)
    {
        $skillArr = array(0=>'WEB',1=>'UI',2=>'UX',3=>'PHOTOSHOP',4=>'SYMFONY1.0');
        $team = new \Acme\TeamBundle\Entity\Team();
        $team->setName('');
        $team->setDesignation('');
        $team->setSkills('');
        $team->setImage('');
        $team->setFacebook('');
        $team->setTwitter('');
        $team->setGmail('');
        $team->setDescription('');
        $form = $this->createFormBuilder($team)
            ->add('name', 'text')
            ->add('designation','text')
            ->add('skills', 'choice', array(
            'choices'  => $skillArr,
            'multiple' => true,
            'expanded' => true,
            'required' => true,
            'empty_value' => true,
            'data' => $skillArr // female value is 1 and male value is 2
            ))
            ->add('image','file')
            ->add('facebook','text')
            ->add('twitter','text')
            ->add('gmail','text')
            ->add('description','textarea')    
            ->getForm();
        $form->handleRequest($request);
        $validator = $this->get('validator');
        $errors = $validator->validate($team);
        if (count($errors) > 0) {
            return $this->render('AcmeTeamBundle:Default:add.html.twig', array('form' => $form->createView()));
        }else{
            $a = $request->request->get('form');
            $skills = implode(',', $a['skills']);
            $img = $form['image']->getData()->getClientOriginalName();
            $team = new \Acme\TeamBundle\Entity\Team();
            $team->setName($a['name']);
            $team->setDesignation($a['designation']);
            $team->setSkills($skills);
            $team->setFacebook($a['facebook']);
            $team->setTwitter($a['twitter']);
            $team->setGmail($a['gmail']);
            $team->setDescription($a['description']);
            $team->setImage($img);
            $em = $this->getDoctrine()->getManager();
            $em->persist($team);
            $em->flush();
            $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/team/'.$team->getId();
            mkdir($dir);
            $form->get('image')->getData()->move($dir,$img);
            return $this->redirect($this->generateUrl('acme_team'));
        }
    	return $this->render('AcmeTeamBundle:Default:add.html.twig', array('form' => $form->createView()));
    }
    public function editAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $teams = $em->getRepository('AcmeTeamBundle:Team')->find($id);
        $oldimg = $teams->getImage();
        $skillArr = array(0=>'WEB',1=>'UI',2=>'UX',3=>'PHOTOSHOP',4=>'SYMFONY1.0');
        $skills = explode(',', $teams->getSkills());
        $team = new \Acme\TeamBundle\Entity\Team();
        $team->setName($teams->getName());
        $team->setDesignation($teams->getDesignation());
        $team->setSkills($teams->getSkills());
        $team->setFacebook($teams->getFacebook());
        $team->setTwitter($teams->getTwitter());
        $team->setGmail($teams->getGmail());
        $team->setDescription($teams->getDescription());
        $form = $this->createFormBuilder($team)
            ->add('name', 'text')
            ->add('designation','text')
            ->add('skills', 'choice', array(
            'choices'  => $skillArr,
            'multiple' => true,
            'expanded' => true,
            'required' => true,
            'empty_value' => true,
            'data' => $skills // female value is 1 and male value is 2
            ))
            ->add('image','file', array('error_bubbling' => TRUE))
            ->add('facebook','text')
            ->add('twitter','text')
            ->add('gmail','text')
            ->add('description','textarea')    
            ->getForm();
        $form->handleRequest($request);
        $validator = $this->get('validator');
        $errors = $validator->validate($team);
        if($request->getMethod() == 'POST')
        {
            if (count($errors) > 1) {
                return $this->render('AcmeTeamBundle:Default:edit.html.twig', array('form' => $form->createView(),'id'=>$id,'image'=>$oldimg));
            }else{
                if($_FILES['form']['name']['image'])
		{
                    $team = $em->getRepository('AcmeTeamBundle:Team')->find($id);
                    if(file_exists($_SERVER['DOCUMENT_ROOT'].'/uploads/team/'.$team->getId().'/'.$oldimg)){
                        unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/team/'.$team->getId().'/'.$oldimg);
                    }
                    $newimg = $form['image']->getData()->getClientOriginalName();
                    $team->setImage($newimg);
                    $em->persist($team);
                    $em->flush();
                    $img = $form['image']->getData()->getClientOriginalName();
                    $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/team/'.$team->getId().'/';
                    $form->get('image')->getData()->move($dir,$img);
                    return $this->redirect($this->generateUrl('acme_team'));
                }
		else
		{
			$a = $request->request->get('form');
                        $skills = implode(',', $a['skills']);
                        $teams->setName($a['name']);
                        $teams->setDesignation($a['designation']);
                        $teams->setSkills($skills);
                        $teams->setFacebook($a['facebook']);
                        $teams->setTwitter($a['twitter']);
                        $teams->setGmail($a['gmail']);
                        $teams->setDescription($a['description']);
                        $teams->setImage($oldimg);
			$em->persist($teams);
                        $em->flush();
			return $this->redirect($this->generateUrl('acme_team'));
		}
            }
        }   
    	return $this->render('AcmeTeamBundle:Default:edit.html.twig', array('form' => $form->createView(),'id'=>$id,'image'=>$oldimg));
    }
    
    public function deleteAction(Request $request)
    {
	$id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $team = $em->getRepository('AcmeTeamBundle:Team')->find($id);
        $em->remove($team);
        $em->flush();
        if(is_file($_SERVER['DOCUMENT_ROOT'].'/uploads/team/'.$id.'/'.$team->getImage())){
        	unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/team/'.$id.'/'.$team->getImage());
                rmdir($_SERVER['DOCUMENT_ROOT'].'/uploads/team/'.$id);
        }
        return $this->redirect($this->generateUrl('acme_team'));
    }
}
