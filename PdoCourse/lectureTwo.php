<?php

ini_set( 'display_errors', 'On' );

include_once 'DatabasePDO.php';

class LectureTwo
{
	/**
	 * @var	pdo $dbo
	 */
	protected $db;
	
	/**
	 * @var void	$sql
	 */
	protected $sql = "SELECT * FROM users";
	
	/**
	 * @brief	default constructor that is creating the connection with the database;
	 * 
	 * @return	$this->db;
	 */
	public function __construct()
	{
		$this->db = DatabasePDO::getInstance();
	}
	
	
	/**
	 * @brief	our task is to create a basic query and to explore how it works and etc;
	 * 			
	 * 
	 * @param	void PDO query that is editing 
	 * @param	void $sql 
	 * 
	 * @return	pdo succsessful response;		
	 */
	public function createBasicQuery()
	{	
		$sql = "UPDATE users SET last_name='Bayraktarov' WHERE Id=1";	
		
		$this->db->query( $sql );
		//if we assign this to a variable like:
		$updateUser = $this->db->query( $sql );
		var_dump($updateUser);
	}
	
	/**
	 * @brief	how we gonna output both users in our database;
	 * 			we are using fetch() on his own; After that for the first time we are 
	 * 			using <pre> </pre> tags..// So FETCH brings back associative and index array
	 * 
	 * @param	string $email
	 * 			
	 * @return	fetch Object
	 * 
	 */
	public function showUsersUsingFetchObject()
	{
		//$sql = "SELECT * FROM users ";
		
		$users = $this->db->query($this->sql);
		
		//echo '<pre>' . var_dump($users->fetchObject()) . '</pre>';
		//as a fetchObject we are adding property from the array;
		echo '<pre>' . var_dump($users->fetchObject()->email) . '</pre>';
		//it straight is coming up like the property that we request;
		
		
/* 	INSIDE fetch we can put (PDO::FETCH_BOTH)&&nothing change)in here we can put 
	INSIDE fetch we can put and (PDO::FETCH_ASSOC) AND IT TIDY UP A LITTLE BIT;
	(PDO::FETCH_NUM) And is coming like index arrays plus strings;
	(PDO::FETCH_OBJECT) And is coming like index arrays plus strings and this
	could be change in the whole method like $users->fetchObject()); 
	echo '<pre>' . var_dump($users->fetch(PDO::FETCH_OBJ)) . '</pre>';
	the difference bettween the object and the array is the return;
	*/
		
	}
	/**
	 * @brief	the fetchObject() shows one object only; We need to loop back to FETCH ALL!!
	 * 			here we are going to use fetch all method to loop back all the methods;
	 * @return	
	 * 
	 */
	public function fetchAllUsers()
	{
		//$sql = 'SELECT * FROM users';
		
		$users = $this->db->query( $this->sql );
		
		var_dump( $users->fetchAll(PDO::FETCH_ASSOC) );
		//this one is a good tip to pop up all the users but AS ARRAYS, not like OBJECTS!!!
		
	}
	
	/**
	 * @brief	here we LOOP through as a objects and use some HTML as well; 
	 * 			it is illegal to have html in the php but here for the example i will use it;
	 * 
	 * 
	 */
	public function fetchAllUsersAsObjects()
	{
		$users = $this->db->query( $this->sql );
		
	
	}
	
	/**
	 * @brief	fetch as array using the method fetch_ass
	 * 
	 * @return	array users
	 */
	public function showUserFetchAssoc()
	{
		//$sql = "SELECT * FROM users ";
		$this->db->query( $this->sql );
		$users = $this->db->query( $this->sql );
		
		var_dump($users->fetch(PDO::FETCH_ASSOC)['email']);
		//var_dump($users->fetchObject()->email)//that is from the function above and the difference;
	}
	
	/**
	 * @brief	
	 */
	public function whileLoopFetchObjectUsers()
	{
		//create the connection execute the query with the $sql;
		$users = $this->db->query( $this->sql );
		
		/* while ( $user = $users->fetch(PDO::FETCH_ASSOC) )
		{//this block just shows how it the same functionality we can print as arreys the info;
			var_dump( $user );
		} die('here'); */
		
		
		/* while ( $user = $users->fetchObject() )
		{	//give me the details for the userS emails, all comes up;
			echo $user->email . '<br>';
		} //i did comment that because the task is to exrract the data into the html
		//	it is illegal to do it like this but later on i will split it in different files;*/
	?>	
		
	<!DOCTYPE html>	
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>PDO</title>
		</head>
		<body>
			<?php while ( $user = $users->fetchObject() ) : ?>
				<div class = "user">
					<h4><?php echo $user->first_name; ?></h4>
					<h4><?php echo $user->email; ?></h4>
				</div>
			<?php endwhile; ?>
		</body>
	</html>
	<?php 
	}
	
	/**
	 * @brief	when execute we do foreach object and than return result
	 * 
	 * @param	$users
	 * @param	$this->db
	 * @return	String
	 */
	public function tryCatchFetchAll()
	{//establish the connection,execute the query use the PDO fetchAll method;
		//$users = $this->db->query( $this->sql )->fetchAll();//shows all
		$users = $this->db->query( $this->sql )->fetchAll(PDO::FETCH_ASSOC );
		
		foreach ( $users as $user )
		{//assign $user === $users; Give me the both emails;
			echo $user['email'], '<br>';	
		}
		var_dump( $users );
		
	}
	
	/**
	 * @brief	We execute and want to do the try/catch into html. Same like the function above;
	 */
	public function tryCatchFetchAllHtml()
	{//establish the connection,execute the query use the PDO fetchAll method;
		$users = $this->db->query( $this->sql )->fetchAll( PDO::FETCH_OBJ );
		
		//here underneath we have an easy way to get the properties;
		?>
		<head>
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
	
	<?php 	
	}
	
}
$lectureTwo = new LectureTwo();
//$lectureTwo->createBasicQuery();//edit the user where id = ?
//$lectureTwo->fetchAllUsers();//setting up to show all users;
//$lectureTwo->showUsersUsingFetchObject();//set up to show the email;
//$lectureTwo->showUserFetchAssoc();//set up to show the email using [];
//$lectureTwo->createBasicQuery();
//$lectureTwo->whileLoopFetchObjectsUsers();//using the html tag and printing the fetchObjects;
$lectureTwo->tryCatchFetchAllHtml();