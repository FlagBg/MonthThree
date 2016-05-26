<?php

include 'TestClass.php';//index.php

$testObj	= new TestClass();

$testObj->setMap( array( '123', '456' ) );

print_r ( $testObj->getMap() ); 



//example $this class!
//var_dump( $testObj );

//print_r( '--------------' );

//$testObj->testMethod( array( '123' => 'abc' ) );

//var_dump( $testObj );



//$testObj2	= new TestClass();

//var_dump( $testObj2 );

//print_r( '--------------' );

//$testObj2->testMethod( array( '456' => 'def' ) );

//var_dump($testObj2);