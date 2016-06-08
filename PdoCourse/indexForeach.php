<?php

ini_set( 'display_errors', 'On' );

$db = new PDO('mysql:host=127.0.0.1; dbname=pdo', 'root', '' );

$users = $db->query( "
	SELECT * FROM users
	" );

//if is like this one is associative array;
//$users = $users->fetchAll();
//with fetchAll is much,much better; fetching everything in an associative array; 
//OPTION A// $users = $users->fetchAll(PDO::FETCH_ASSOC);

//OPTION A// echo '<pre>', var_dump( $users ), '</pre>';

//foreach this one 
/* //REGARDING OPTION A//foreach ( $users as $user ) 
{
	echo $user['email'], '<br>';
} */

$users = $users->fetchAll(PDO::FETCH_OBJ);

// foreach ( $users as $user )
// {
// 	echo $user->email, '<br>';
// }
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