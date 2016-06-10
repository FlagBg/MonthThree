<?php

if ( isset( $_FILES['upload']) )
{
	$allowed_ext = array( 'jpg', 'jpeg', 'png', 'gif' );
	$ext = strtolower(substr($_FILES['upload']['name'], strrpos( '.', $_FILES['upload']['name'], '.' ) + 1 ) );
	$errors = array();
	
	echo $ext;
	
	if ( in_array($ext, $allowed_ext ) === false )
	{
		$errors[] = 'You can upload images.';
	}
	
	if ( $_FILES['upload']['size'] > 100000 )
	{
		$errors[] = 'The file is too big';
	}
	
	if ( empty( $errors) )
	{
		move_uploaded_file($_FILES['upload']['tmp_name'], "files/{$_FILES['upload']['name']}" );
	}
	
	
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>File Upload Verification Method</title>
	</head>
	<body>
		<div>
			<?php 
				if ( isset( $errors )) //( isset( $_FILES['upload']['name']))
					if ( empty( $errors ) )
				{
					echo '<a href="files/', $_FILES['upload']['name'], '">View Image</a>';
				}
				else 
				{
					foreach ( $errors as $error)
					{
						echo $error;
					}
				}
			
			?>
		</div>
		<div>
			<form action=" " method="post" enctype="multipart/form-data">
				<p>
					<input type = "file" name="upload" />
					<input type = "submit" value="Upload" />
				</p>
			</form>
		
		
		</div>
	
	</body>