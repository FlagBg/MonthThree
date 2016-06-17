<?php

namespace Bookstore\Domain;

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

/** 
 *@namespace	Specifying a namespace has to be the first thing that you do in a file. In order to do that, 
 *				use the namespace keyword followed by the namespace. Each section of the 
 *				namespace is separated by \, as if it was a different directory.	
 * 				If you do not specify the namespace, the
 *				class will belong to the base namespace, or root.
 * 
 * 
 * 
 * 
 * 
 * @brief
 * 
 * 
 * 
 * @author User
 *
 */
class Customer extends Person
{
	
	private $id;
	
	//private $firstname;
	
	//private $surname;
	
	private $email;
	
	private static $lastId = 0;
	
	/*
	 * @brief	creating object from person and from in here as well. As we want to to reference a method or property from the parent class from the child, 
	 * 			you can use $this as the property or method that is in the same class, In fact you could say it is; So if we use $this, because the php will
	 * 			invoke the one from the child, as we want to use the one from the parent, we use ::parent;
	 * 
	 * 
	 * 
	 */
	/* public function __construct( $id, $firstname, $surname, $email )
	*{
	*	if ( empty( $id )  ) //$id == null
	*	{
	*		$this->id = ++self::$lastId;
	*	}
	*	else 
	*	{
	*		$this->id = $id;
	*		
	*		if( $id > self::$lastId )
	*		{
	*			self::$lastId = $id;
	*		}
	*	}
	*	$this->firstname	= $firstname;
	*	$this->surname		= $surname;
	*	$this->email		= $email;
	} 
	*/
	
	/* public function __construct( $id, $firstname, $surname, $email )
	{//that is before extending the Person class, where the same properties are located;
		$this->id			= $id;
		$this->firstname	= $firstname;
		$this->surname		= $surname;
		$this->email		= $email;
	} */
	
	public function __construct( $id, $firstname, $surname, $email )
	{//doesnt duplicate codel it called the parent class Person and sending the $firstname $lastname
		parent::__construct($firstname, $surname);
		if( empty( $id ) )
		{
			$this->id = ++self::$lastId;
		}
		else 
		{
			$this->id = $id;
			if( $id > self::$lastId )
			{
				self::$lastId = $id;
			}
		}
		$this->email = $email;
		
	}
	
	
	public function getId()
	{
		return $this->id;
	}
	
	/* we have got in the class Person that just now i have extended;
	 * public function getFirstname()
	{
		return $this->firstname;
	}
	
	public function getSurname()
	{
		return $this->surname;
	} */
	
	public function getEmail()
	{
		return $this->email;
	}
	
	public function setEmail( $email )
	{
		$this->email = $email;

	}
	
	/**
	* @brief	Another benefit of static properties and methods is that we do not need an object to use
	*			them. You can refer to a static property or method by specifying the name of the class,
	*			followed by ::, and the name of the property/method. That is, of course, if the visibility
	*			rules allow you to do that, which, in this case, it does not, as the property is private. Let’s
	*			add a public static method to retrieve the last ID:
	
	*@return	getLastId You can reference it either using the class name or an existing instance, from anywhere in the code
	*
	*/
	public static function getLastId()
	{
		return self::$lastId;
	}
	
	
	
}
//In the preceding example, $customer1 specifies that his ID is 3, probably because he is an
//existing customer and wants to keep the same ID. That sets both his ID and the last static ID to 3.
$customer1 = new Customer(3, 'John', 'Doe', 'johndoe@mail.com');
//we do not specify the ID, so the constructor
//will take the last ID, increase it by 1, and assign it to the customer. So $customer2 will
//have the ID 4, and the latest ID will be 4 too.
$customer2 = new Customer(null, 'Mary', 'Poppins', 'mp@mail.com');
var_dump($customer2);
//Finally, our secret agent knows what he wants, so he forces the system to have the ID as 7. The latest ID will be updated to 7 too.
$customer3 = new Customer(7, 'James', 'Bond', '007@mail.com');

