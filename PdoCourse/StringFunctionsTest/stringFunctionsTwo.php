<?php
	
ini_set( 'display_errors', 'On' );

/**
 * @brief	 testing function second part. Testing some scripts;
 * 
 * @return	string;
 *
 */
class StringFunctionsTwo
{
	/*
	 * @var script;
	 */
	public $from_db; 
	
	/**
	 * @brief	this one is uset to sanitised entities and it is used in blogs and etc
	 */
	public function testintScript()
	{
		$var = '<script>alert("Hello!"):</script>';
		$from_db = $var;
		
		$sanitised = htmlentities( $from_db );
		
		echo $sanitised;
		
	}
	
}

$stringFunctionsTwo = new StringFunctionsTwo();
$stringFunctionsTwo->testintScript();
?>
