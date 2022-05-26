<?php

class Car{

	var $wheels = 4;
	var $hood = TRUE;
	var $engine = TRUE;
	var $doors = 5;

	function addWheels(){
		$this -> wheels += 2;
	}

	function updateCar(){
		$this -> wheels = 8;
		$this -> hood = FALSE;
		$this -> doors = 7;
	}
}

//We can re-create variables and save for them another value
//Also "extends" allow us to use EVERY element of the second class (And variables and functions)
class Plane extends Car {

	var $wheels = 20;
}

$jet = new Plane();

echo $jet -> wheels;

$jet -> addWheels();

echo $jet -> wheels;

?>