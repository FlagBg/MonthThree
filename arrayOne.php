<?php

/**
 * @brier`	here i am testing arrays; Actually were quite wrong written in the past so i am rewriting it pretty;
 * 
 * @return	string
 */
class ArrayOne
{
	/*
	 * @var	string $names
	 */
	public $names; 
	 
	/*
	 * @var	int $num
	 */
	public $num = 10;
	
	/*
	 * @var	double $age
	 */
	public $age = 5;
	
	
	/**
	 * @brief	get the content of an array;
	 * 
	 * @return	values;
	 */
	public function names()
	{//this one done!!! shows the result; 
		$names = array (
		'Alex' =>array(
					'Age'	=>21, 
					'Hair'	=>'Blonde', 
					'Food'	=> array( 
									'Pizza',
									'Pasta'),										),					
		'Billy' => array(
					'Age'=>22,
					'Hair'=>'Brown' ),
		'Dale' => array(
					'Age'=>14, 
					'Hair'=>'Blonde' ) 
		);
		
		print_r( $names );// prints the values;
		print_r( $names['Alex']['Hair'] );// prints $key  . $value in cell 0;
		print_r( $names['Alex']['Food'][0]);
	}
	
	/**
	 * @brief	declementing to zero
	 * 
	 * @param	int	$num
	 * 
	 * @return	array
	 */
	public function loopNum()
	{//while loop; incrementing to 10; assume that $num is ZERO; if we get the global $this->num = recursion;
		while ( $num <= 10)
		{//it declementing the $num up to zero as obvious; :Dale
			echo $num . '<br>';
			$num++; 		
		}
		
		/* $num = $this->num;
		var_dump( $num );//get the global $num;
		
		while ( $num <= 20)
		{//it declementing the $num up to zero as obvious; :Dale
		echo $num . '<br>';
		$num++;
		} */
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function doWhileLoop()
	{//do while loop //it is obvious what it is doing! 
		$num1 = 1;
		
		while ( $num1 != 1 )
		{
			echo 'This';
		}
		do	{
				echo 'That';
			}
				while ( $num1 != 1 );
	}
	
	public function forLoop()
	{//for loops 
		//$num = 0;
		
		for ( $num = 0; $num <= 10; $num++ )
		{ 
			echo $num;
		}
		
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function nameSS()
	{
		$namess = array( 
				'One'	=>1, 
				'Two'	=>2, 
				'Three'	=>3
				);
		//it works in a browser :P
		foreach( $namess as $value )
		{
			echo $value . '<br>';
		}
		//nice one foreach $key . $value!
		foreach( $namess as $key => $value )
		{
			echo $key . ' is ' . $value . " " ;
		}
	}

	public function testSetCompletedsnapshotIsCompleted()
	{
		$mockSnapshot	= $this	->getMockBuilder( '\Cyclonis\Api\V1\Module\Backup\Model\Snapshot' )
		->disableOriginalConstructor()
		->getMock();
		
		$mockSnapshot	 	->method( 'exists' )
							->willReturn( true );
		
		$mockSnapshot		->method( 'isInProgress' )
							->willReturn( true );

		$this->resultSet	->method( 'count' )
							->willReturn( 1 );

		$this->dbAdapter	->method( 'query' )
							->with( SnapshotQuery::CQL_GET_SNAPSHOT )
							->willReturn( $this->resultSet );

		$this->assertTrue( $this->snapshot->setCompleted() );
		//var_dump($this->snapshot->isInProgress() ) //boolean false;
	}
	
	
	public function specialK()
	{
		
		$age = 10;
		$this->age = 5;
		
		$age = is_int($this->age) && !isset($age) ? $this->age : "Not a number";
		
		if (!isset( $age) )
		{
			if ( $age < 15 )
			{
				print "Your age is less than 15";
			}
			elseif ( $age == $age1 )
			{
				print "Priravnyavane";
			}
		
		else 
		{
			print "Hi";
		}
		
		}
		else
		{
			print "This value has not been set.";
		}

	}

}

$arrayOne = new arrayOne();
//$arrayOne->names();
//$arrayOne->loopNum();
//$arrayOne->doWhileLoop();
//$arrayOne->forLoop();
//$arrayOne->nameSS();
//$arrayOne->specialK();
/* echo $names;die();
print_r( $names ); */
//var_dump $names['Alex']['Food'][1];
	