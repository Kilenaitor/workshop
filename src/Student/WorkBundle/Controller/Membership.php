<?php

namespace Student\WorkBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class Membership 
{
    static function confirm($session)
    {
        if(!isset($session))
        {
            return false;
        }
		else if($session->get('status', 'no') != 'authorized') //If they are not authorized in the session
		{
            return false;
		}
        return true;
	}
    
    static function validateUser($username, $password, $session = null)
	{
		$password = hash('sha256', $password); //Hash the input password using SHA256 encryption algorithm (No salt because I'm lame)
		$ensure_credentials = self::verify($username, $password); //Call the verify method in the mysql class
	
		if(!is_null($ensure_credentials)) //No errors means successful authentication
		{
			$username = self::getUsername($username);
			$session->set('status', 'authorized'); //Set their session status to authorized
			$session->set('username', $username); //Set their session username to their username for global access throughout the site
        
            return true;
		} 
		else 
		{
			return "Incorrect Username or Password"; //Otherwise return an error that they had an incorrect username or password
		}
	}
    
    static function verify($username, $password)
	{
		$con = mysqli_connect("localhost","root","","Student"); //Connect to the database
	
		if(mysqli_connect_errno()) 
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
          die;
		}
	
		$query = "SELECT * FROM users WHERE username='$username'"; //Lookup username
	
		$result = mysqli_query($con, $query) or trigger_error(mysqli_error()." ".$query);
	
		$row = mysqli_fetch_assoc($result);
	
		if($password === $row['password']) //Check to see if their entered password matches the one from their table entry
		{
			mysqli_close($con);
			return $row['username']; //If it matches, they're in!
		}
		else
		{
			mysqli_close($con);
			return; //Otherwise, kick them out
		}
	}
    
    static function getUsername($username)
	{
		$con=mysqli_connect("localhost","root","", "Student"); //Connect to the database
        
        $query = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");
        return $query->fetch_assoc()['username'];
	}
}