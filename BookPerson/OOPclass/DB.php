<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

class db
{
	/**
	 * @var unknown
	 */
	var $server;
	
	/**
	 * @var string user
	 */
	var $user;
	
	/**
	 * @var $password
	 */
	var $password;
	
	/**
	 * @var string 
	 */
	var $dbname;
	
	/**
	 * @var 
	 */
	var $link;

	
/*
 * @brief 	create connection;
 */
	public function connect()
	{
		$this->link = 
			mysql_connect( $this->server, $this->user, $this->password);
			mysql_select_db ( $this->dbname );
			
	}
	
	/**
	 * @
	 */
	public function __construct()
	{	echo 'Constructor';
		$this->server   = 'localhost';
		$this->user     = 'root';
		$this->password = '';
		$this->dbname   = 'bookdb';
	}
	
	public function __destruct()
	{	echo 'Destructor';
		@mysql_close( $this->link);	
	}
}
$db1 = new db();
$db1->connect();

