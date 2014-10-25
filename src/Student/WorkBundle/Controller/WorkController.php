<?php

namespace Student\WorkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorkController extends Controller
{
    public function indexAction()
    {
        $session = $this->getRequest()->getSession();
        if(!Membership::confirm($session))
            return $this->redirect($this->generateUrl('login'));
        
        $session = $this->getRequest()->getSession();

        $con=mysql_connect("localhost","root",""); //Start a connection to the database. :)
        $db_selected = mysql_select_db('Student', $con); //Select the "Site" database

        $username = $session->get('username');
        $name = mysql_result(mysql_query("SELECT username FROM users WHERE username='$username'"), 0);
        
        return $this->render('StudentWorkBundle:Work:index.html.twig', array('name' => $name));
    }
    
    public function loginAction()
    {
        $session = $this->getRequest()->getSession();
		
		if($_POST && empty($_POST['username']))
		{
			$error = "Username cannot be blank";
            return $this->render('StudentWorkBundle:Work:login.html.twig', array('error' => $error));
		}
		
		if($_POST && empty($_POST['password']))
		{
			$error = "Password cannot be blank";
            return $this->render('StudentWorkBundle:Work:login.html.twig', array('error' => $error));
		}
        
        if($_POST && !empty($_POST['username']) && !empty($_POST['password']))
		{
            $response = Membership::validateUser($_POST['username'], $_POST['password'], $session);	//Validate the user when they click submit on the login
        
	        if($response['status'] == 'success')
	            return $this->redirect($this->generateUrl('home'));
		    else if($response['status'] == 'failure')
			{
				$error = "Incorrect Username or Password";
	            return $this->render('StudentWorkBundle:Work:login.html.twig', array('error' => $error));
			}
		}
		return $this->render('StudentWorkBundle:Work:login.html.twig');
    }
    
    public function logoutAction()
    {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->redirect($this->generateUrl('home'));
    }
	
	public function signupAction()
	{
		$session = $this->getRequest()->getSession();
		
		if($_POST && empty($_POST['username']))
		{
			$error = "Username cannot be blank";
            return $this->render('StudentWorkBundle:Work:signup.html.twig', array('error' => $error));
		}
		
		if($_POST && empty($_POST['password']))
		{
			$error = "Password cannot be blank";
            return $this->render('StudentWorkBundle:Work:signup.html.twig', array('error' => $error));
		}
        
        if($_POST && !empty($_POST['username']) && !empty($_POST['password']))
		{
            $response = Membership::signup($_POST['username'], $_POST['password'], $session);	//Validate the user when they click submit on the login
        
	        if($response['status'] == 'success')
	            return $this->redirect($this->generateUrl('home'));
		    else if($response['status'] == 'failure')
			{
				$error = $response['message'];
	            return $this->render('StudentWorkBundle:Work:signup.html.twig', array('error' => $error));
			}
		}
		return $this->render('StudentWorkBundle:Work:signup.html.twig');
	}
}
