<?php

ini_set( 'display_errors','On' );

/**
 *@brief	setting up the database table with MySql; When initialize with connect with the database itself;
 *			it is better to use singleton desing pattern for that connection because is one isntance and I could
 *			easily inherit it using:
 *
 *@return	$singleton = Singleton::getInstance();
 */
class DatabasePDO
{
	/**
	 * @var HOST
	 */
	const HOST						= 'localhost';//could be 127.0.0.1
	
	/**
	 * @var DB_NAME
	 */
	const DB_NAME					= 'pdo';
	
	/**
	 * @var USER
	 */
	const USER						= 'root';
	
	/**
	 * @var PASS
	 */
	const PASS						= '';
	
	/**
	 * @var $connection;
	 */
	public static $connection = NULL;
	
	/**
	 * @brief	function that create connection with no params as default;
	 */
	private function __construct()
	{
		
	}
	
	/**
	 * @brief	function that crate the database connection and works as object; 
	 * 
	 * @param	if 	self::$connection === NULL;
	 * 
	 * @return	PDO	connection
	 */
	public static function getInstance()
	{
		if ( self::$connection === NULL)
		{
			self::$connection = new PDO( 'mysql:host=' . self::HOST . ';dbname=' . self::DB_NAME, self::USER, self::PASS);
		}
		
		return self::$connection;
		
	}
	
}
