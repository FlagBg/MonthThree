<html>
	<head>
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/lightbox-2.6.min.js"></script>
	<link href="css/lightbox.css" rel="stylesheet" />  
	 		href="jquery.mobile/jquery.mobile-1.1.0.css" />  
	</head>
	<body>

<?php

$page = $_SERVER['PHP_SELF'];
//setting
$column = 5;
//directories
$base = "data";
$thumbs = "thumbs";
// get album
if ( isset( $_GET[ 'album' ] ) )
{
	$get_album = $_GET['album'];
}
// if no album selected
if ( !isset( $get_album ) )
{
	echo '<b>Select an album</b><br>';
// find each album and display as links
$handle = opendir( $base );
	while ( false !== ( $file = readdir( $handle ) ) )
	{
		if ( is_dir( $base . "/" . $file ) && $file != "." && $file != ".." && $file != $thumbs )
		{
	echo "<a href='$page?album=$file'>" . $file . "</a><br>";
		}
	}
	
	closedir( $handle );
	} 
	else 
	{ // if album selected// check if album exists, and additional security checks
		if ( !is_dir( $base . "/" . $get_album ) || (strstr( $get_album, "." ) != NULL ) 
				|| ( strstr( $get_album, "/" ) != NULL ) 
				|| (strstr( $get_album, "\\") != NULL))
		{
			echo 'Album does not exists';
		} 
		else 
		{
			echo "<b>" . $get_album . "</b><p />";
	
			$x = 0;
			// open album directory to display each image                
			$handle = opendir($base . "/" . $get_album);
	
		while ( ( $file = readdir( $handle ) ) != false )
		{
			if ($file != "." && $file != "..")
			{
				echo 
				"<table style='display:inline;'>
					<tr>
						<td>
							<a href='$base/$get_album/$file' data-lightbox='nondatabasealbum'><img src='$base/$thumbs/$file' height='100' width='80'></a>
						<td>
					</tr>
				</table>";
	
				$x++;
				if ( $x == $column)
				{
					$x = 0;
					echo '<br>';
				}
			}	
		}
		closedir($handle);
		}
	
	}
		echo "<p><a href='$page'>Back to Albums";
?>
	
	</body>
	
</html>