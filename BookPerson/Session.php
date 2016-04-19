<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

session_name('my');
session_start();

/**
 * @brief 	doing the login, first scenario, user is not logged, so form is coming and he logged
 */
//if( !isset( $_POST[user]))
if( !isset( $_SESSION[username]))
	{
		echo "<form action = session.php method=post>
			Login:    <input type = text name = user>
			Password: <input type = password  name= pass >
					  <input type = submit value = ok></form>";
	}	
	/**
	 * @brief 	user add name and pass;
	 */else 
		{
			if ( ( $_POST[user]==="den") && ( $_POST[pass]==="123") )
			{
				//name and pass true
				//initialise the sessian variable
				$_SESSION[username] = $_POST[user];
				//shows hello session and goodbuy, logout
				echo "Hello, $_SESSION[username] || 
					<a href = session.php?action=logout>Logout</a>";
			}
				else //wrong pass
				echo "Not Allowed";
		}
		}		
		else 
		{
			//user Logged
			echo "Hello, $_SESSION[username] || 
					<a href=session.php?action=logout>Logout</a>";
		} //if logout is pressed 
		if ( $isset( $_GET[action] ))
			if( $_GET[action] === "logout")
			{//unset session
				unset($_SESSION[username]);
				//shows logout and exit;
			echo "<form action = session.php method=post>
					Login: <input type = text name=user>
					Password: <input type=password name = pass>
					<input type = submit value = OK></form>";
		}
?>
	