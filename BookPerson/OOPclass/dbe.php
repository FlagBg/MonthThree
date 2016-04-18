<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

include_once 'DB.php';

/**
 * @brief 		checked extention
 * @author User
 *
 */
class Dbe extends db
{
	/**
	 * @brief 	describe 
	 * 
	 * @return void
	 */
	public function getServer()
	{
		echo $this->server;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see db::connect()
	 */
	public function connect()
	{
		echo 'Connecting...';
		$this->link = mysql_connect( $this->server, $this->user, $this->password );
		mysql_select_db( $this->dbname );
	}
}