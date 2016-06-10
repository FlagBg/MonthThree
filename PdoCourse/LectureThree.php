<?php

ini_set( 'display_errors', 'On' );

include_once 'DatabasePDO.php';
include_once 'Form.html';

class LectureThree
{
	
	/**
	 * @var pdo $dbo
	 */
	protected $db;
	
	/**
	 * @var void $sql
	 */
	protected $sql = "SELECT * FROM users";
	
	
	/**
	 * @brief	creating the object pdo and returning it
	 * 
	 * @return 	pdo object $this->db;
	 */
	public function __construct()
	{
		$this->db = DatabasePDO::getInstance();
	}
	
	/**
	 * @brief	redirect to google.com
	 * 
	 * @return	response
	 */
	public function hi()
	{//redirect using the header to;
		header('location: http://google.com');
	}
	
	public function isSet()
	{
		if ( isset($_POST['something']))
		{
			echo $_POST['soomething'];
		}
		
	}
	
}

$test = new LectureThree();
$test->isSet();