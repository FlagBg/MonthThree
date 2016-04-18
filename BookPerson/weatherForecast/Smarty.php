<?php


include_once 'Weather.php';
class Forecast
{
	
	public $zipCode;
	
	
	/*
	 * 
	 * 
	 * 
	 * 
	 */
	
	
	
	/**
	 * @brief  	get The forecast using $zipCodel
	 * 
	 * @param double $zipCode
	 */
	public function getForecar( $zipCode )
	{
		$forecast = Weather::Forecast( $zipCode );
		
		$output = "<table>";
		$output = "<tr><td>Temp:</td><td>" . $forecastp[' temp ']. "</td><tr>";
		$output = "/table>";
		
		return $output;
		
	}
	
	
	
	
	
	
}