<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

include_once 'config.php';
include 'functions.php';
//connecting to the db
echo "<html>";
echo "<head>";
echo "<title>Chapter 3</title>";
echo "</head>";
echo "<body>";

//optimisation!!!!!!!!
echo "<html>
		<head>
			<title>Chapter 3</title>
		</head>
	<body>";

die('here');
//get footer and header;
$header = join( '', file( 'header.html' ) );
$footer = join( '', file( 'footer.html' ) );

//this one is in a function now... so it needs to be amended/
$left = get_menu();

$content = "";



if (isset( $_GET['p'] ) )
{
	//getting $p and $id';
	$p  = $_GET['p'] ;
	$id = $_GET['id'];
	
	if ( $p == "show") $content = get_blog_record( $id );
	elseif ( $p == "filter" ) $content = get_cat( $cat );
	else $content = "Wrong page";
}
else 	
{
	//shows all records
	//shows by pages
	$N = 5;//how many records per page!
	//calculating how many records we have
	$r1 = 1;
}

//if $p == snow, we show the record!
//if $p == filter, we show the records for the specific category, otherwise 
//we show = wrong page!

		
echo "<table border=0 width=100%>
			<tr><td valign=top width=20%>left</td>
			<td valign=top>$content</td>
	   </tr></table>";

	   
echo "<table border=0 width=100%>
			<tr><td valign=top width=80%>$content</td>
			<td valign=top>$left</td>
			</tr></table>
			$footer";


