<?php

ini_set( 'display_errors', 'On' );

$db = new PDO('mysql:host=127.0.0.1; dbname=pdo', 'root', '' );


/**
 * @brief update User; with update query; 
 * @var unknown
 */
$updateUser = $db->query( "
	UPDATE users
	SET last_name = 'Bayraktarov'
	WHERE Id = 1		
	" );

var_dump( $updateUser );


$users = $db->query( "
	SELECT * FROM users
	" );
//it shows associative arrays and keys;
echo '<pre>' , var_dump( $users->fetchAll() ), '</pre>' ;


/*
 * @brief	with this one if we want to fetch_associative array the data
 * 			we need to add the key after the FETCH_ASSOC
 * 
 */
echo '<pre>' , var_dump( $users->fetch(PDO::FETCH_ASSOC ) ), '</pre>' ;
//this is the second option for that; It will shows me the email, as the fetchObject is doing it
//but there is and an other way to do it.... which is the one after:
//at first we need to assign the fetch into a variable;

$users = $users->fetch( PDO::FETCH_ASSOC);

echo $user['email']; //which is going to be exactly the same result;

echo '<pre>' , var_dump( $users->fetch(PDO::FETCH_ASSOC )['email'] ), '</pre>' ;


echo '<pre>' , var_dump( $users->fetch(PDO::FETCH_NUM ) ), '</pre>' ;

/**
 * @brief = shows properties;
 */
echo '<pre>' , var_dump( $users->fetch(PDO::FETCH_OBJ ) ), '</pre>' ;

//the other way is using fetchObject!!! 
//return array, but fetch object returns object, we have properties we can pull back any 
//property that we want;
echo '<pre>' , var_dump( $users->fetchObject()->email ), '</pre>' ;


/*
 * @brief	there is other way with fetchAll()
 * 
 * @var		$user
 */
echo '<pre>' , var_dump( $users->fetchAll() ), '</pre>' ;
//than 
echo '<pre>' , var_dump( $users->fetchAll(PDO::FETCH_ASSOC) ), '</pre>' ;
























