<?php


error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

class dbc
{
	public $server;
	public $user;
	public $password;
	public $dbname;
	
	public $charset;
	public $flag;
	
	private $link;
	
	public $result;
	public $rows;
	public $affected_rows;
	public $last_error;
	
	/**
	 * brief	create connection;
	 */
	public function __construct()
	{
		/**
		 * @brief 	string localhost
		 */
		$this->server = 'localhost';
		
		/**
		 * @brief 	username
		 */
		$this->user   = 'root';
		
		$this->password = '';
		$this->dbname = 'bookdb';
		/**
		 * @brief 	coding
		 */
		$this->charset = 'cp1251';
	}
	
	
	public function __destruct()
	{
		@mysql_close( $this->link);
	}
	

	/**
	 * @brief		the connection is made, if not we do it again; if it is not we calling mysql_error and see what kind of errors we have;
	 * 
	 * @var	boolean $this->connected /connection established;
	 * 
	 * 
	 * 
	 */
	public function connect()
	{
		/**
		 * @brief 	
		 * @var unknown
		 */
		$this->connected = true;
		
		$this->link = @mysql_connect( $this->server, $this->user, $this->password );

		$this->last_error = mysql_errno( $this->link );

		if ( $this->last_error > 0 )
		{
			$this->connected = false;
			echo "Can't connect to Sårver" . mysql_error( $this->link );		
		}
			/**
			 * @brief  there is no errors for the connection thaan we choose DB
			 */
			else 
			{
				@mysql_select_db( $this->dbname, $this->link );
				$this->last_error = mysql_errno( $this->link );
				if ( $this->last_error > 0 ) 
				{
					$this->connected = false;
					echo "Can't connect db " . $this->dbname . "<br>Select another database and try again<br> " . mysql_error( $this->link );
				}
			}
		
		/*
		 * @brief  	set the coding
		 */
		$query = "Set Names " . $this->charset;
		@mysql_query ( $query, $this->link );
		
	}
	
	public function query($q)
	{
		$this->result = @mysql_query( $q, $this->link );
		$this->last_error = mysql_errno( $this->link );
		
		if( $this->last_error > 0)
		{
			echo mysql_error( $this->link );
		}
		else 
		{
			$this->rows = mysql_num_rows( $this->result);
			$this->affected_rows = mysql_affected_rows( $this->link );
		}
		
	}
	
	public function silent( $q )
	{
		@mysql_query( $q, $this->link );
		$this->rows = 0;
		
		$this->last_error = mysql_errno( $this->link );
		
		if ($this->last_error > 0 )
		{
			echo mysql_error( $this->link );
		}
		else 
		{
			$this->affected_rows = mysql_affected_rows( $this->link);	
		}
	
	}

}

$dbc = new dbc();
$dbc->server = 'localhost';
$dbc->user   = 'root';
$dbc->password = '';
$dbc->dbname = 'bookdb';

if ($db1->connected)
{
	$db1->query('select * from users');
	
	echo "Rows in result: " . $dbc->rows;
}