<?php
	/* This code also contains conditionals, which we already know. We are setting a variable to
	know if we submitted a login or not, and set the cookies if so. But the highlighted lines
	show you a new way of including conditionals with HTML. This makes the code more
	readable when working with HTML code, avoiding the use of {}, and instead using : and
	endif. Both syntaxes are correct, and you should use the one that you consider more
	readable in each case. */
$submitted = isset($_POST['username']) && isset($_POST['password']);

if ( $submitted )
{
	setcookie('username', $_POST['username'] );
}
?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<title>Bookstore</title>
</head>

<body>
	<?php if( $submitted ) : ?>
	<p>Your login info is</p>
	<ul>
		<li><b>username</b> : <?php echo $_POST['username']; ?></li>
		<li><b>password</b> : <?php echo $_POST['password']; ?></li>
	</ul>
	<?php else: ?>
		<p>You did not submit anything. </p>
	<?php endif; ?>
</body>
</html>