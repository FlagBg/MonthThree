<?php

ini_set( 'display_errors', 'On' );

/**
 * @brief	creating class that represents the user; 
 * @author User
 *
 */
class User
{
	
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
	echo $user->email, '<br>';
	echo "{$user->first_name} {$user->last_name}<br>";
}




?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PDO</title>
	</head>
	<body>
		<?php foreach ( $users as $user ) : ?>
			<div class = "user">
				<h4><?php echo $user->first_name; ?></h4>
				<p><?php echo $user->email; ?></p>
			</div>
		<?php endforeach; ?>
	</body>
</html>