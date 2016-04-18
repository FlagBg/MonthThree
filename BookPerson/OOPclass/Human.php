<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );


/**
 * @brief 	creating an object Human;
 * 
 * 
 * @author User
 *
 */
class Human
{
	//$$foo['bar']['baz'] = ($$foo)['bar']['foo'];
	//$$
	
	/**
	 * @var integer $age
	 */
	private $age = 20;
	
	/**
	 * @var string
	 */
	protected $name = "Angel";
	
	/**
	 * @var string
	 */
	protected $username = "Flagman";	

	public function setAge( $age )
	{
		$this->age = $age;
	}
	
	public function test()
	{
		$a = 50;
		$b = 0;
		
		try
		{
			if ( $b==0) throw new Exception('EDivideZero');
			$a = $a / $b;
		}
		
		catch ( Exception $exception)
		{
			if ( $exception->getMessage()=='EDivideZero')
				die('EDiViDeByZeRo');
		}
		
		
	}
}

$h = new Human();
$h->test();

