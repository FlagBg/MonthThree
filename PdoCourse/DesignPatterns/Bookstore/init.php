<?php

use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;
error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';

/* function __autoload ( $classname )
{
	$lastSlash = strpos($classname, '\\') + 1;
	$classname = substr($classname, $lastSlash);
	$directory = str_replace('\\', '/', $classname);
	$filename = __DIR__ . '/src/' . $directory . '.php';
	require_once($filename);

}
 */

$book1 = new Bookstore\Domain\Book("9785267006323", "The Book PhP", "George Washington", 12);
$book2 = new Bookstore\Domain\Book("9780061120084", "To Kill a Mockingbird", "Harper Lee", 2);

$customer1 = new Customer(1, 'John', 'Doe', 'johndoe@mail.com');
$customer2 = new Customer(2, 'Mary', 'Poppins', 'mp@mail.com');

$book1->available = 2;
$customer1->id = 3;
