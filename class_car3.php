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
$counter = 0;
$bmw = new Car();
$toyota = new Car();


do {
//Call a variable from
echo "<h1>".$counter + 1 . " car</h1>";
echo "<p>Amount of wheels at BMW: " . $bmw -> wheels . "</p>" .
	"<p>The presence of a hood at BMW: " . $bmw -> hood . "</p>" .
	"<p>Amount of doors at BMW: " . $bmw -> doors . "</p>" .
	"<p>The presence of a engine at BMW: " . $bmw -> engine . "</p>";

	//Call a function
	$bmw -> addWheels();
	$counter++;
} while ($counter < 2);
 
do {
	//Call a variable from
	echo "<h1>".$counter + 1 . " car</h1>";
	echo "<p>Amount of wheels at Toyota: " . $toyota -> wheels . "</p>" .
		"<p>The presence of a hood at Toyota: " . $toyota -> hood . "</p>" .
		"<p>Amount of doors at Toyota: " . $toyota -> doors . "</p>" .
		"<p>The presence of a engine at Toyota: " . $toyota -> engine . "</p>";
	
		$toyota -> updateCar();
		$counter++;
	} while ($counter < 4);
	

?>
