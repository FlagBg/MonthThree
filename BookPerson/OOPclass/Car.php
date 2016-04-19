<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

/**
 * 
 * @brief 	initialize the exams from the book. Creating  User
 *
 */
class Carrrr
{
	/*
	 * @var string $mark
	 */
	var $mark;
	
	/**
	 * 
	 * @var string
	 */
	var $model;
	
	/**
	 * 
	 * @var color
	 */
	var $color;
	
	/**
	 * 
	 * @var date
	 */
	var $year;
	

	/**
	 * @brief 	get The Info./... .
	 */
	
// 		$this->mark;
// 		$this->model;
// 		$this->color
// 		$this->year;

	
	public function getInfo()
	{
		print " $this->mark $this->model $this->color $this->year ";
	}

	public function setMark( $mark )
	{
		$this->mark = $mark;
	}
	

}

$car = new Carrrr();
$car->mark = "asdf";
$car->model = "sadf";
$car->year  = "asdfa";
$car->color = "wersaf";
$car->getInfo();
$car->setMark("asdfasdfasdfasdfda");
$car->getInfo();

