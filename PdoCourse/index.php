<!Doctype HTMl>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Spell Check</title>
    </head>
    <body>
        <form method="get">
             <input type="text" name="check" autocomplete="off" autofocus />
        </form>
    </body>
 </html>

<?php

ini_set( 'display_errors', 'On' );


class SpellChecker
{
	
	
	
	/**
	 * 
	 * @param unknown $line
	 */
	public function addTo( $line )
	{
		return strtolower( trim( $line ) );
		
	}
	

	/**
	 * 
	 * @param unknown $input
	 * @param unknown $words
	 */
	

	
	/**
	 * @brief	 
	 * 
	 * @param unknown $input
	 * @param unknown $words
	 */
	public function checkSpelling( $input, $words )
	{
		$words = array_map( 'addTo', file('dictionary.txt' ) );
		
		$words = array_unique( $words );
		
		$suggestions = array();
	
		if( in_array( $input, $words ) )
		{//var_dump($words);
			echo "you spelled the word right! ";
		}
		else
		{
			foreach( $words as $word )
			{
				$percentageSimilarity = 0.0;
				
				$input = preg_replace('/[^a-z0-9 ]+/i', '', $input);
				
				similar_text(
						strtolower(trim( $input ) ), 
						strtolower(trim( $word ) ),
						$percentageSimilarity );
				
				if( $percentageSimilarity >= 90 && $percentageSimilarity < 100 )
				{
					if( !in_array( $suggestions ) )
					{
						array_push( $suggestions, $word);
					}
				}
			}
			if( empty( $suggestions ) )
			{
				foreach( $words as $word )
				{
					$input = preg_replace('/[^a-z0-9 ]+/i', '', $input );
					
					$levenshtein = levenshtein(strtolower(trim( $input ) ), strtolower(trim( $word) ) );
					
					if( $levenshtein<=2 && $levenshtein > 0 )
					{
						if( !in_array( $suggestions ) )
						{
							array_push( $suggestions, $word );			
						}
					}
				}
					echo "Looks like you spelled that wrong. Here are some suggestions: <br />";
				
				foreach( $suggestions as $suggestion )
				{
					echo "<br />".$suggestion."<br />";
				}
			}
		}
		if( isset( $_GET['check']) )
		{
			$input = trim( $_GET['check'] );
			
			$sentence = '';
	
			if( stripos( $input, ' ' ) !==false )
			{
				$sentence = explode( ' ', $input );
				var_dump( $sentence); die('sentence');
				foreach( $sentence as $item )
				{
					checkSpelling($item, $words);
				}
			}
			else
			{var_dump($input); var_dump($words);
				checkSpelling( $input, $words ); 
			}
		}
	}
}
$spellCheck = new SpellChecker();

$spellCheck->checkSpelling('angel', 'ivan');
$spellCheck->addTo( $line );

var_dump( $spellCheck );

?>

