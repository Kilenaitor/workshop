<?php

namespace Student\WorkBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class Membership 
{
    static function confirm($session)
    {
        if($session->get('status', 'no') != 'authorized')
            return false;
        return true;
	}
    
    static function validateUser($username, $password, $session = null)
	{
		$password = hash('sha256', $password);
        
        $con = self::connectToDatabase();
        
		$query = "SELECT * FROM users WHERE username='$username'"; //Lookup username
		$result = mysqli_query($con, $query) or trigger_error(mysqli_error()." ".$query);
		$row = mysqli_fetch_assoc($result);
        
        $verified = false;
	
		if($password === $row['password'])
			$verified = true;
	
		if($verified)
		{
			$username = self::getUsername($username);
			$session->set('status', 'authorized');
			$session->set('username', $username);
            return array('status' => 'success');
		} 
		else 
			return array('status' => 'failure');
	}
    
    static function signup($username, $password, $session)
    {
        $password = hash('sha256', $password);
        
        $con = self::connectToDatabase();
        $query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
        $row = mysqli_fetch_assoc($query);
        if(!empty($row))
            return array('status' => 'failure', 'message' => 'Username is already taken');
        
        $query = "INSERT INTO users (`username`, `password`) VALUES ('$username', '$password')";
        mysqli_query($con, $query);
		
        $username = self::getUsername($username);
		$session->set('status', 'authorized'); 
		$session->set('username', $username);
        
        return array('status' => 'success');
    }
    
    static function getUsername($username)
	{
		$con = self::connectToDatabase();
        $query = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");
        
        return $query->fetch_assoc()['username'];
	}
    
    static function connectToDatabase()
    {
        return mysqli_connect("localhost","root","","Student");
    }
    
}