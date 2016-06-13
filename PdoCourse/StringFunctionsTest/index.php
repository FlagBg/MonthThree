<?php

if ( isset( $_POST['text'] ) )
{
	echo nl2br ( htmlentities( $_POST['text'] ) );
}

//nl2br($string)
?>

<form action = "" method = "POST">
	<textarea name = "text"></textarea>
	<P>
	<input type="submit" value="submit">
	</P>
</form>
