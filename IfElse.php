<?php




/**
 * 
 * @brief	Check and shows how if/else works;
 * 
 * @details	  
 *
 */
class X
{
	
	/**
	 * @param int $age;
	 */
	public $age = 20;

	/**
	 * @param string $name
	 */
	public $name = "Angel";
	
	/**
	 * @param int $ageOne
	 */
	public $ageOne = 21;

	
	
	/**
	 * @brief  
	 * 
	 * @param unknown $age
	 */
	public function other( $age )
	{
		if ( $age < 10 ) 
		{
			print "nope";
		}
		else
		{
			print "Here I am"; 
		}
	}
	
	public function specialK( $ageThree )
	{
		if ( $age < 15 )
		{
			print "Your age is less than 15";
		}
		
		elseif ( $age == $ageOne )
		{
			print "Priravnyavane";
		}
		
		else 
		{
			print "Hi";
		}
	}
	
	
	/**
	 * @brief	function that prevent bullying learners of condition at the beginning to avoid
	 * 			if condition /else stm at all, and than to create it obligatory that is always in the 
	 * 			else statement;
	 * 
	 *  
	 * @param int $age
	 */
	public function specialKK( $age )
	{		
		$age = (INT)$age;
		
		if ( !is_int( $age ) )
		{ 
			echo "This is not a number";  
		}
		else 
		{ 
			echo "Your age is " . $age; }
	}
	/**
	 * @brief	
	 * 
	 * @param	double $age
	 * 
	 * @return	string
	 */
	public function printA( $age )
	{
		if ( $age < 18 )
		{
			print "You are too young - enjoying it!";
		}

		if ( $age >= 18 && $age < 25 )
		{
			print "Helllooowwwwww. It is me. ";
		}

		else
		{
			print "Opppsssss, You are not in If condition..";
		}

		if ( $age < 10 )
		{
			print "You are under ten years old.";
		}

		elseif ( $age < 20 )
		{
			print "You are younger than 20 years old ";
		}

		elseif ( $age < 30 )
		{
			print "You are under 30. ";
		}

		elseif ( $age < 40 )
		{
			print "You are under 40";
		}

		else
		{
			print "You are over 40 years.";
		}
	}

	/**
	 * @brief		This one check if provided name inside or notl
	 *
	 * @param  String $name

	 * @return String
	 */
	public function secondCondition( $name )
	{
		//$this->age = $age;

		if ( $name == "Ivan" )
		{
			print "Your name is Ivan. ";
		}

		else
		{
			if ( $name == "Gergana" )
			{
				print " Your name is Gergana. ";
			}
			else
			{
				if ( $name == "Boyan" )
				{
					print "Your name is Boyan. ";
				}
				else
				{
					if ( $name == "Dragan" )
					{
						print "Your name is Dragan ";
					}
					else
					{
						print "Who are u?!";
					}
				}
			}
				
		}
	}

	public function setAge( $age )
	{
		return $this->age;
	}
	
	public function setName( $name )
	{
		return $this->name;
	}
	
	public function getAge()
	{
		return $this->age;
	}
	
}

$x = new X();
//$x->setAge($age);
$x->specialKK( asdfasdf );
