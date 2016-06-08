<?php

ini_set( 'display_errors', 'On' );


$db = new PDO('mysql:host=127.0.0.1; dbname=pdo', 'root', '' );

$usersQuery = $db->query("SELECT * FROM users" );

$users = $usersQuery->fetchAll(PDO::FETCH_OBJ );

//echo $usersQuery->rowCount();


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PDO</title>
	</head>
	<body>
		<p>There are <?php echo $usersQuery->rowCount(); ?> registered users.</p>
		
			<div>	
				<h4><?php foreach ( $users as $user ) : ?></h4>
				<h4><?php echo $user->first_name; ?></h4>
				<h4><?php echo $user->email; ?></h4>
			</div>
		<?php endforeach; ?>
	</body>
</html>