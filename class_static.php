<?php
class Car{

	static $wheels = 4;
	var $hood = TRUE;

	//Static could be a function as well
	public static function addWheels(){
		Car::$wheels += 2;
	}

}

$bmw = new Car();

//Way to use static varibles
echo Car::$wheels . "<br>";

Car::addWheels();

//Way to use static varibles
echo Car::$wheels . "<br>";


?>
