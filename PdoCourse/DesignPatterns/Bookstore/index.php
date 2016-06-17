<?php 

require 'index.html';


$looking = isset( $_GET['title'] ) || isset( $_GET['author']); 
	/* Now access the link, http://localhost:8000/?author=HarperLee&title=To Kill a
	Mockingbird. You will see that the page prints some of the information that you passed on
	to the URL. */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bookstore</title>
</head>
<body>
	<p>You are: <?php echo $_COOKIE['username']?></p>
	<p>Are you looking for a book'? <?php echo (int)$lookingForBook; ?></p>
	<p>The book you are looking for is</p>
	<ul>
		<li><b>Title</b>: <?php echo $_GET['title']; ?></li>
		<li><b>Author</b>: <?php echo $_GET['author']; ?></li>
	</ul>
</body>
</html>

	<?php
	//mixed conditionals and HTML code in two ways. The first opens a php tag, and add if/else clause that print
	//whether we are authenticated or not No HTML is merged within the conditionals, which makes it clear.	
		if (isset($_COOKIE['username']))
		{
			echo "you are " . $_COOKIE['username'];
		}
		else 
		{
			echo "You are not authenticated.";
		}
		?>
			</p>
	<?php
		
		if (isset( $_GET['title']) && isset( $_GET['author'])) {
		//shows an uglier solution, when we have to print a lot of html, echo is not handy and it is better to close the php tag, print all HTML code
		?>
			<p>The book you are looking for is</p>
			<ul>
				<li><b>Title</b> : <?php echo $_GET['title']; ?></li>
				<li><b>Author</b> : <?php echo $_GET['author']?></li>
			</ul>
		<?php 
		} 
		else 
		{
			?>
			<p>You are not looking for a book?</p>
		<?php
		}	//http://www.angel.com/designpatterns/Bookstore/ that is the start;
		?>
		
	<?php 
	/* The last, but not least, type of loop is foreach. This loop is exclusive for arrays, and it
	allows you to iterate an array entirely, even if you do not know its keys. There are two
	options for the syntax, as you can see in the following examples: 
	
	*The foreach loop accepts an array—in this case $names—and it specifies a variable which
	will contain the value of the entry of the array. You can see that we do not need to specify
	any end condition, as PHP will know when the array has been iterated.
	*/
		$names = ['Angel', 'Ivan', 'Dragan'];
		foreach ( $names as $name )
		{
			echo $name . " ";
		}
		foreach ( $names as $key => $name )
		{
			echo $key . " -> " . $name . " ";
		}
		
	?>
	
	<?php 
		$books = [
			[
				'title' => 'To Kill A Mockingbird',
				'author' => 'Harper Lee',
				'available' => true,
				'pages' => 336,
				'isbn' => 9780061120084
			],
			[
				'title' => '1984',
				'author' => 'George Orwell',
				'available' => true,
				'pages' => 267,
				'isbn' => 9780547249643
			],
			[
				'title' => 'One Hundred Years Of Solitude',
				'author' => 'Gabriel Garcia Marquez',
				'available' => false,
				'pages' => 457,
				'isbn' => 9785267006323
			],			
		]
	?>
	<ul>
		<?php foreach ( $books as $book): ?>
		<li>
			<i><?php echo $book['title']; ?></i>
			- <?php  echo $book['author']; ?>
				<?php if ( !$book['available'] ): ?>
				<b>Not available</b>
		<?php endif; ?>
		</li>
			<?php endforeach; ?>
	</ul>
	
</body>
</html>