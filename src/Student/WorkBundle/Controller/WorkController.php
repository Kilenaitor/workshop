<?php

namespace Student\WorkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorkController extends Controller
{
    public function indexAction()
    {
		/* Code goes here */
		$name = "name";
        return $this->render('StudentWorkBundle:Work:index.html.twig', array('name' => $name));
    }
    
    public function loginAction()
    {
     	/* Code goes here */
		return $this->render('StudentWorkBundle:Work:login.html.twig');
    }
    
    public function logoutAction()
    {
       	/* Code goes here */
        return $this->redirect($this->generateUrl('home'));
    }
	
	public function signupAction()
	{
		/* Code goes here */
		return $this->render('StudentWorkBundle:Work:signup.html.twig');
	}
}
