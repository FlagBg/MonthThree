<?php

interface SplObserver
{
	abstract public void update ( SplSubject $subject )
}

class Newspaper implements \SplSubject
{
	private $name;
	private $observers = array();
	private $contentl
	
	public function __construct( $name )
	{
		$this->name = $name;
	}
	
	/**
	*	@brief add observerl
	*/
	public function attack(\SplObserver $observer )
	{
		$this->observers[] = $observer;
	}
	
	/**
	*@brief	remove observer
	/**
	public function detach( \SplObserver $observer )
	{
		$key = array_search( $observer, $this->ovservers, true );
		if ( false !== $key )
		{
			unset( $this->observers[ $key ] );
		}
		//could bloody wrong be:
		//if( $key )
		//{
		//	  unset( $this->observers[ $key ] ); but if the observer is the first in the array, it will never 
		//	delete, because the key would be equal to zero and 0 == false,
		//}
	}
	
	public function getContent()
	{
		return $this->content. " ({ $this->name } )";
	}
	
	//notify observers( or some of them )
	public function notify()
	{
		foreach ( $this->observers as $value )
		{
			$value->update( $this );
		}
	}

}

class Reader implements SplObserver
{
	private $name;
	
	public function __construct( $name )
	{
		$this->name = $name;
	}
	
	
	public function update( \SplSubject $subject )
	{
		echo $this->name. 'is reading news ' .$subject->getContent();
	}

}

class TestFunctions
{
	
	public function ifElse()
	{
		$a = 2;
		
		$b = 1;
		
		if ( $a>$b )
		{
			return;
		}
		else
		{
			 echo $d = ($a + $b );
		}	
	}
	
}

$newspaper = new Newspaper( 'NewYork Times' );

$allen  = new Reader( 'Allen' );
$jim	= new Reader( 'Jim' );
$linda	= new Reader( 'Linda' );

//add reader 
$newspaper->attach( $allen );
$newspaper->attach( $jim );
$newspaper->attach( $Linda );

//remove reader
$newspaper->detach( $linda );

//set breaks outs
$newspaper->breakOutNews('The USA!!!');

