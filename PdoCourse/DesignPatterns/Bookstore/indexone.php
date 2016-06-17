/* okay so build me a function which takes a username and password encrypts the password, 
		after checking that the password is not the same as the username, and is secure 
		at least 6 characters, one letter, one number, one uppercase, one special character, 
		not the user’s date of birth, first name, or surname, or any string of 4 characters from their name), 
		then outputs the username and password as an array.
		
		There are loads of IF statements in that.

 */

<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>

<body>
	<p>Enter your details to login:</p>
	<form action = "indexone.php" method = "post">
		<label>Username</label><input type = "text" name = "username"/>
		<label>Password</label><input type = "text" name= "password"/>
		<input type = "submit" value = "Login" />

		<?php if ( $a->submitted() ) : ?>
		<p>Your login info is:</p>
		<ul>
			<li><b>Username:</b> : <?php echo $_POST['username']; ?></li>
			<li><b>Password:</b> : <?php echo $_POST['password']; ?></li>
		</ul>
		<?php else: ?>
			<p>You did not submit anything. </p>
		<?php endif; ?>	
	</form>
		
</body>
</html>
<?php 
class IndexOne
{
	

	public function submitted()
	{
		$submitted = isset($_POST['username'] ) && isset($_POST['password']);
		
		if ( $submitted )
		{
			setcookie('username', $_POST['username'] );	
		}
		else 
		{
			echo 'smt is wrong';
		}
	}
	
	public function login( $username, $password )
	{
		$username 	= $_POST['username'];
		
		$password		= $_POST['password'];
		$passwordCrypt	= md5( trim( $password ) );
		echo $password;
		
		if ( $username == $password )
		{
			return false;
		}
		else 
		{
			if ( strlen($username) > 6 ) 
			{
				return true;
			}
		}
		
		if ( strlen( $password) > 6)
		{
			return true;
		}
		
		
		
	}
	
	//echo $password;
}	

$a = new IndexOne();
$a->submitted();


?>

