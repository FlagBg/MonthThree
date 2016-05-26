<?php

class TestClass //TestClass.php
{
	protected $map = array();
	
	
	public function __construct()
	{
		var_dump( $this );
	}
	
	public function setMap( array $map = array() )
	{
		$this->map = $map;
	}
	
	public function getMap()
	{
		return $this->map;
	}
	
	public function testMethod( $map )
	{
		$this->map = $map;
		
		$this->clearMap();
	}
	
	private function clearMap()
	{
		$this->map	= array();
	}
	
	
	
}
