<?php

ini_set( 'display_errors', 'On' );

include_once 'DatabasePDO.php';
/**
 * @brief	creating class that represents the user; 
 * @author User
 *
 */
class User
{
	/**
	 * @var	pdo $dbo
	 */
	protected $db;
	
	/**
	 * @var void	$sql
	 */
	protected $sql = "SELECT * FROM users";
	
	/**
	 * @brief	default constructor that is creating the connection with the database;
	 *
	 * @return	$this->db;
	 */
	public function __construct()
	{
		$this->db = DatabasePDO::getInstance();
	}
	
	/**
	 * @brief	get The fullname;
	 * 
	 * @param	string $first_name
	 * 
	 * @param	string $last_name
	 * 
	 * @return	string
	 */
	public function getFullName()
	{
		return "{$this->first_name} {$this->last_name}";
	}
	
	public function testData()
	{
		$users = $this->db->query( $this->sql );
		
		//usersFetchMode( and Inside Fetch as a Class named 'User' )
		//$users->setFetchMode( PDO::FETCH_CLASS, 'USER');
		$users->setFetchMode( PDO::FETCH_CLASS, 'User');
		
		while ( $a = $user = $users->fetch() )
		{var_dump( $a );die('here');
			echo $user->getFullName() . '<br>';
		}
		
	}
	//
}
$test = new User();
$test->testData();die;




//getting rid of that line here and than i want to print all the datas in the db;
//$users = $users->fetch();

//echo '<pre>', var_dump( $users->email ) , '</pre>';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//while ( $user = $users->fetch() )
//{	//we can see two emails now in here;
//	echo $user->getFullName(), '<br>' ;
//}

?>

