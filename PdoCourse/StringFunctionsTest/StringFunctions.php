<?php

ini_set( 'display_errors', 'On' );

/**
 * @brief	testing String Functions that we need;
 *
 */
class StringFunctions
{
	
	/**
	 * @var string 	$name
	 */
	public $name = 'Alex';
	
	/**
	 * @brief	test StringsLength strlen
	 * 
	 */
	public function stringLenghtCheck()
	{http://www.angel.com/StringFunctionsTest/StringFunctions.php?name=alyori = put in the URL;
		$input = $_GET['name'];
		
		$max_length = 10;
		
		if ( strlen ( $input) > $max_length )
		{
			print "Sorry, mother fucker, your lenght is too fucking long ";
		}
		else
		{
			print "The length is ok.  ";  
		}
			
	}
	
	/**
	 * @brief	testing one if/else and putting in to the trim!
	 * 
	 * @var	string $name;
	 * 
	 * @return	string	$name
	 */
	public function oneMoreLengthCheck()
	{
		$name = 'Angel';
		
		if( strlen(trim( $name ) ) > 10 )
		{
			print 'Your name is too long';
		}
		else 
		{
			print 'Length of yourname is Ok!'; 
		}

	}
	
	/**
	 * @brief	checking the string lenght;
	 * 
	 * @param string $asd
	 * @param string $name
	 * 
	 * return double;
	 */
	public function strlen( $asd )
	{	
		(string)$asd;
		$asd_length = strlen( $asd );
		
		$name_length = strlen($this->name); //$name = "Alex";
		print "Your name has lenght " . $name_length . " characters. ";
		
		echo "The length of " . $asd . " is " . $asd_length .  "characters "; 
		
	}
	
	
	public function substring()
	{//it works, with first position in the string and than give me the rest as counting;
		$name = 'Alex James Garrett';
		echo substr( $name, 0, 17 );	
		
	}
	
	/**
	 * @brief	we adding substring and strlen together and assigning in a new variable :body as condition
	 * 			that is a good syntax that is example for the future;
	 * 
	 *  @param	string $name
	 * 	 @param	string $body
	 *  
	 *  @return	string $body	
	 *  
	 */
	public function strlenSubString()
	{
		$body = 'This is an article. It\'s quite long, and could go on for some time, leaviong you no room on the page. ';
		
		//$body = (strlen( $body ) > 20 ) ? substr( $body, 0, 20 ) . '....' : $body ;
		$body = (strlen( $body ) > 25 ) ? substr( $body, 0, 25 ) . '....' : $body ;
		var_dump($body); die('here');
	}
	
	
	/**
	 * @brief	we convert strings to lowercapitals
	 * 
	 * @var		string $name
	 * @var		string $username
	 * 
	 * @return	string
	 * 
	 */
	public function strlToLower()
	{
		//echo strtolower( $this->name );
		
		$username = "AlaBalaNica";
		var_dump( $username);
		$username_lc = strtolower( $username );
		
		$input = 'Alabalanica';
		var_dump($input);
		if( strtolower( $input ) == $username_lc )
		{
			print 'The Username is Ok';	
		}
		else 
		{
			print 'It is not Ok!';
		}	
	}
	
}

$string = new StringFunctions();
var_dump( $string );//it shows the class variable $this->name in the object;
$string->oneMoreLengthCheck();die();
$string->strlToLower();
$string->strlenSubString();
$string->strlen('ALABALANICA');
$string->stringLenghtCheck();
