<?php

/**
 * @brief	https://phpunit.de/manual/current/en/test-doubles.html#test-doubles.mock-objects
 * 			
 * 
 * @author User
 *
 */
class Subject
{
	protected $observers = array();
	protected $name;
	
	public function __construct( $name )
	{
		$this->name = $name;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function attach( Observer $observer )
	{
		$this->observers[] = $observer;
	}
	
	public function doSomething()
	{
		// Do something.
		// ...
		// Notify observers that we did something.
		$this->notify( 'something' );
	}
	public function doSomethingBad()
	{
		foreach ($this->observers as $observer)
		{
			$observer->reportError(42, 'Something bad happened', $this);
		}
	}
	protected function notify( $argument )
	{
		foreach ($this->observers as $observer)
		{
			$observer->update($argument);
		}
	}
}

class Observer
{
	public function update( $argument )
	{
		//do something;
	}
	
	public function reportError( $errorCode, $errorMessage, Subject $subject )
	{
		
	}
	
	// other methods.
}

class SubjectTest extends PHPUnit_Framework_TestCase
{
	public function testObserversAreUpdated()
	{
		//Create a mock for the Observer class,
		//only mock the update() method.
		$observer = $this->getMockBuilder( 'Observer' )
							->setMethods( array( 'update' ) )
							->getMock();
		
		//Set up the expectation for the update() method
		//to be called only once and with the string 'something'
		// as its parameter/
		
		$observer->expects( $this->once() )
						->method('update')
						->with( $this->equalTo('something') );
		
		//Create a Subject object and attach the mocked 
		//Observer object to it.
		$subject = new Subject('My subject');
		$subject->attach($observer);
		
		//Call the doSomething() method on the @subject object
		// which we expect to call the mocked Observer object's
		//update() method with the string 'something'.
		$subject->doSomething();
	}
}
?>