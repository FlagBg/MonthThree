<?php

/**
 * 
 * @brief 	Singleton design pattern getting the connection User
 *
 */
class DatabaseConfig
{	
	/**
	 * @var string password
	 */
	const USERNAME			= 'root';
	
	/**
	 * @var string Pass
	 */
	const PASSWORD 			= '';
	/**
	 * @var string Host
	 */
	const HOST				= 'localhost';
	/**
	 * @var string DB_NAME
	 */
	const DB_NAME			= 'bookdb';
	
	/**
	 * @var \PDO $connection
	 */
	public static $connection = null;
	
	
// 	private function __construct()
// 	{
		
// 	}
	
	/**
	 * @brief  function that create the database connection;
	 * 
	 * @param	if self::$connection === NULL;
	 * @return 	PDO connection;
	 */
	public static function  getConnection()
	{
		if ( self::$connection === NULL)
		{
			self::$connection = new PDO( 'mysql:host =' .self::HOST . ';dbname=' . self::DB_NAME, self::USERNAME, self::PASSWORD );	
		}
		
		return self::$connection;
	}
	
	protected $db;
	
	public function __construct()
	{
		$this->db = DatabaseConfig::getConnection();
	}
	//this one could not work... we will see it later.... $db is my way. 
// 	public function __construct( )//this is clear
// 	{
		
// 		$this->db = Database::getConnection();
// 	}
	
}
 //$db = new DatabaseConfig();
 

?>
