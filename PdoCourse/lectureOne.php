<?php

ini_set( 'display_errors', 'On' );

include_once 'databasePDO.php';


/**
 * 
 * @author  Establishing the connection with the PDO;
 * 			It is creating an PDO object 
 *
 */
class LectureOne
{
	
	protected $db;
	
	public function __construct()
	{
		$this->db = DatabasePDO::getInstance();
	}

	
	/**
	* @brief	Creates the static Connection with the DB and create the object PDO
	*			
	* @throws	\Exception
	* 			Throws and exception in case of a missing or wrong parameter;
	* 			\could be $e->getMessage();
	* 			$db->setAttribute(PDO::ATTR_ERRMOE, PDO::ERRMODE_WARNING),
	* 							 (PDO::ATTR_ERRMODE_SILENT);
	* 			 
	*
	* @return	PDO object; if I do var_dump as a object of __CLASS__ it appears
 	*/
	public function catchPDORException()
	{
		try
		{	//avoiding the instance of the singleton $this->db = DatabasePDO::getInstance();
			$db = new PDO('mysql:host=127.0.0.1; dbname=pdo', 'root', '' );
		}
		catch ( PDOException $e)
		{
			var_dump( $e->getMessage() );
			echo 'Something is wrong';
		}
		
	}
	
	/**
	 * @brief Trying to checked the errors modes. Here we are putting fake string as a quiry
	 * 		  in line 64 
	 * 
	 * @param	$this->db;
	 * @param	$connection // so in line 64 we are putting fake query as string; 
	 * 
	 * $return db->setAttribute(PDO::ATTR_ERRMOE, PDO::ERRMODE_WARNING),
	 * 							(PDO::ATTR_ERRMODE_SILENT);
	 */
	public function setAttr()
	{
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		
		try
		{
			$connection = $this->db->query("Invalid");
		}
		catch ( PDOException $e )
		{
			'Something is wrong in functin setAttr';
			var_dump($e->getMessage());
		}
	}

}



$lectureOne = new LectureOne();

$lectureOne->catchPDORException();
$lectureOne->setAttr();//set query mistake by purpose; 
var_dump($lectureOne);
