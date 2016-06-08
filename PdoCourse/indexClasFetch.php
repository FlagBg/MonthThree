<?php

ini_set( 'display_errors', 'On' );

/**
 * @brief	creating class that represents the user; 
 * @author User
 *
 */
class User
{
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
	
	//
}

$db = new PDO('mysql:host=127.0.0.1; dbname=pdo', 'root', '' );

$users = $db->query( "
	SELECT * FROM users
	" );
//usersFetchMode( and Inside Fetch as a Class named 'User' )
$users->setFetchMode( PDO::FETCH_CLASS, 'USER');

//getting rid of that line here and than i want to print all the datas in the db;
//$users = $users->fetch();

//echo '<pre>', var_dump( $users->email ) , '</pre>';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

while ( $user = $users->fetch() )
{	//we can see two emails now in here;
	echo $user->getFullName(), '<br>' ;
}

?>

