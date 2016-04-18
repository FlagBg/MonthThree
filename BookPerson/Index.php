<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );
//INI_SET( "include_path", "D:/projects/Month3/MonthThree/Smarty/libs);


class DBconnect
{	
	private $user = 'root';
	private $pass = '';
	
	/*
	 * @var array $levels
	 */
	public $levels;
	
	public function createConnection()
	{
		
		$sql = 'SELECT * FROM users';
		
		try {
			$dbh = new PDO('mysql:host=localhost;dbname=bookdb;',$this->user, $this->pass);
		
			$stmt = $dbh->prepare( $sql );
			$stmt->execute();
		
		
			if ( $stmt )
			{
				$result = $stmt->fetchAll();
			}
			return $result;
									
		}catch ( PDOException $e)
			{
				print "connection failed " . $e->getMessage();
			}		
		// up to here i have got connection with the database
		//i will follow one example to try to extract datas from the database 
		
// 			$tableData = array(
// 					$_POST['ID'],
// 					$_POST['USERNAME'],
// 					$_POST['EMAIL'],
// 					$_POST['STATUS']
// 								);
			
			
	}
	
	
	/**
	 * @brief  start a little bit the udem online course that is why this array have appeared and in a function coz no other way to :)
	 */
	public function createArray()
	{
		$levels = array(1,2,3);
	
		print "Using var_dump shows ";
		var_dump( $levels );
	    print_r( $levels );
	}
	
	
	
	/**
	 * @brief function to divide rows and arrays coz for any reasons it is combining them.... 
	 */
	public function hi()
	{
		print 'opppalyankaaaa';
	}

	/**
	 * @brief continuing with the udem, that is why this array appeared and will be executed
	 */
	public function createSecondArray()
	{	
		$levels1 = array(
				5 => 'Level 1',
				6 => 'Level 2',
				7 => 'Level 3'
		);
		print_r( $levels1 );
	}
	
	public function createAssotiativeArray()
	{
		$neshtoSi = array(
			1 => array(
					'name' => 'Level 1', 
					'desc' => 'This is the first level'
						),
			2 => array(
					'name' => 'Level 2',
					'desc' => 'This is the second level'
			),
			3 => array(
					'name' => 'Level 3',
					'desc' => 'This is the third level'
			)
			);
		
		print_r( $neshtoSi );
	}
			
}
$db = new DBconnect();
$db->createConnection();
$db->createArray();
var_dump($db->createConnection());
$result = $db->createConnection();
var_dump($result);
echo "<p> Records in result: " . 'mysql_num_rows( $result )';
echo "<p><table border = 1 width = 100%>";
echo '<pre>', $db->createArray() , '</pre>';
$db->hi();
echo '<pre>', $db->createSecondArray(), '<pre>';
echo '<pre>', print_r($neshtoSi),'</pre>';
$db->createAssotiativeArray();
echo '<pre>', print_r( $db->createAssotiativeArray()), '</pre>';



