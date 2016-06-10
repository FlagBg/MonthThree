<?php





	if ( isset($_POST['something'], $_POST['something_else']) )
	{
		$something 		= $_POST['something'];
		$something_else = $_POST['something_else'];
		
		$users = 1;
		echo $something , " " , $something_else;
	}
	//need the connection
	//just the code
	if ( isset($_POST['email'], $_POST['pass']) || isset($_COOKIE['email'], $_COOKIE['pass']) )
	{
		if ( isset($_COOKIE['email'], $_COOKIE['pass']))
		{
			$email	= db($_COOKIE['email']);//db_connection
			$pass	= db($_COOKIE['pass']);
		}
		else
		{
			$email	= mysql_query;
		}
	
	
	
	
		$something 		= $_POST['something'];
		$something_else = $_POST['something_else'];
	
		$users =1 ;
		echo $something , " " , $something_else;
	
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>UndefinedIndex</title>
	</head>
	<body>
		<form action = "" method ="post">
		Type:
			<input type="text" name="something" />
			<input type="text" name="something_else" />
			<input type="submit" value="Submit" />
		</form>
	</body>
</html>