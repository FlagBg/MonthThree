<?php

class IndexOne
{
	
	public $username 	= "Chris";
	
	public $password	= "TimeIsUp3`";
	
	public $birthday;	
	
	public $firstName 	= 'asdf';
	
	public $surname		= 'asdfas';
	
	
	
	public function doTheFunction( $username, $password )
	{
		//$password = ^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$
		//$password = md5(trim($password));
		
		if ( $password != $username)
		{
			if( strlen( $password) > 6 )
			{
				if ( $password != $firstName && $password != $surname )
				{
					return $password = md5(trim($password ) );
					echo $password;
					echo $username;
					
				}
			}
			else 
			{
				echo 'password needs to be more than 6 digits';
			}
		}
		else 
		{
			return false;
			echo 'Password needs to be different than the username';
		}
	
	}
	
	
	
	
	

	public function submitted()
	{
		$submitted = isset($_POST['username'] ) && isset($_POST['password']);
		
		if ( $submitted )
		{
			setcookie('username', $_POST['username'] );	
		}
		else 
		{
			echo 'smt is wrong';
		}
	}
	
	public function login( $username, $password )
	{
		$username 	= $_POST['username'];
		
		$password		= $_POST['password'];
		$passwordCrypt	= md5( trim( $password ) );
		echo $password;
		
		if ( $username == $password )
		{
			return false;
		}
		else 
		{
			if ( strlen($username) > 6 ) 
			{
				return true;
			}
		}
		
		if ( strlen( $password) > 6)
		{
			return true;
		}
		
		
		
	}
	
	//echo $password;
}	

$a = new IndexOne();
$a->doTheFunction("angel", "asdfasdfasdf");


?>

