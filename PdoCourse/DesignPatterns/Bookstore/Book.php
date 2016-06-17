<?php

namespace Bookstore\Domain;

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

/**
 * 
 * @brief		Objects are representations of real-life elements. Each object has a set of attributes that
 *			differentiates it from the rest of the objects of the same class, and is capable of a set of
 *			actions. A class is the definition of what an object looks like and what it can do, like a
 *			pattern for objects.
 *			Let’s take our bookstore example, and think of the kind of real-life objects it contains.
 *
 */
class Book
{	
	/**
	 * @var int
	 */
	public $isbn;
	
	/**
	 * @var string;
	 */
	public $title;
	
	/**
	 * @var string
	 */
	public $author;
	
	
	/**
	 * @var double
	 */
	public $available;
	
	
	
	public function __construct( $isbn, $title, $author, $available )
	{
		$this->isbn			= $isbn;
		$this->title		= $title;
		$this->author		= $author;
		$this->available	= $available;
	}
	
	
	public function getIsbn()
	{
		return $this->isbn;
	}
	
	public function getAuthor()
	{
		return $this->author;
	}
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function isAvailable()
	{
		return $this->available;
	}
	
	
	
	/**
	 * @brief	function that gives us a printable Tittle; 
	 * 
	 * @param	$this ->represent the object itself;
	 */
	public function getPrintableTitle()
	{
		$result = '<i>' . $this->title
					. '</i> - ' . $this->author;
		
		if ( !$this->available )
		{
			$result .= '<b>Not available</b>';
		}
		return $result;
		//$result = '<>';
	}
	
	public function toString()
	{
		$result = '<i>' . $this->title . '<i> - ' . $this->author;
		
		if ( !$this->available )
		{
			$result .= '<b>Not Available</b>';
		}
		return $result;
		
	}
	
	/**
	* @brief	In this preceding method, we first check if we have at least one available unit. If we do
	*			not, we return false to let them know that the operation was not successful. If we do have
	*			a unit for the customer, we decrease the number of available units, and then return true,
	* @return bool
	*/
	public function getCopy()
	{
		if ( $this->available < 1)
		{
			return false;
		}
		else 
		{
			$this->available--;
			
			return true;
		}		
	}
	
	/**
	 * @brief	We already have the getCopy method that takes one copy when possible;
	 * 
	 * @return 
	 */
	public function addCopy()
	{
		$this->available++;
	}

}


//$book1 = new Book("1985", 12341234123412345, "George Washington" );

$book->title = "1984";
$book->author = "George Orwell";
$book->isbn = 12341234123412345;
$book->available = 12;
$book = new Book();

if ( $book->getCopy() )
{
	echo 'Here, your copy. ';
}
else 
{
	echo 'I am afraid that book is not available.';
}




