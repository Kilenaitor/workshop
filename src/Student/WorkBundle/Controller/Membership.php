<?php

namespace Student\WorkBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class Membership 
{
    static function confirm($session)
    {
        /* Code goes here */
	}
    
    static function validateUser($username, $password, $session = null)
	{
		/* Code goes here */
	}
    
    static function signup($username, $password, $session)
    {
        /* Code goes here */
    }
    
    static function getUsername($username)
	{
		$con=mysqli_connect("localhost","root","", "Student"); //Connect to the database
        
        $query = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");
        return $query->fetch_assoc()['username'];
	}
    
    static function connectToDatabase()
    {
        return mysqli_connect("localhost","root","","Student");
    }
    
}