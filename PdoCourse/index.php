<?php

ini_set( 'display_errors', 'On' );

/**
 * @brief	creating class that represents the user;
 * @author User
 *
 */
class User
{
	
	protected $dates = [ 'created'];
	
	
	public function __construct()
	{//so we var_dump this one is our class, but we fetching our class underneath 
		//so it prints the object; second option is to print the other part as print ="NEVER"
		var_dump( $this->created = 'NEVER');
		//try $this __Class__ $this->user etc.
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

}

$db = new PDO('mysql:host=127.0.0.1; dbname=pdo', 'root', '' );

$users = $db->query( "
	SELECT * FROM users
	" );
//usersFetchMode( and Inside Fetch as a Class named 'User' )
$users->setFetchMode( PDO::FETCH_CLASS, 'User');

?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PDO</title>
	</head>
	<body>	
		<h4><?php while ( $user = $users->fetch() ) : ?></h4>	
			<div class = "user">
				<h4><?php echo $user->getFullName()?></h4>
				<p>Registered on <?php echo $user->created; ?></p>
			</div>
		<?php endwhile; ?>
	</body>
</html>