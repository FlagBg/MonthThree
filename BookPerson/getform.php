<?php

// function print_arg()
// {
// 	for ( $i = 0; $i<func_num_args(); $i++ )
// 	{
// 		echo func_get_args($i) . "<br>";
// 	}
	
// }

// print_arg("F", "S", "T");

class Test
{
	public function hi( $a )
	{
		var_dump(func_get_arg(0));
		$x++;
	}
	
}

$test = new Test();
$test->hi(1);