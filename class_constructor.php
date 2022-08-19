<?php
class Car{

	var $wheels = 4;
	var $hood = TRUE;
	var $engine = TRUE;
	var $doors = 5;

	//Every time new variable appears it going to automatically start
	function __construct(){
		$this -> wheels = 0;
		$this -> hood = FALSE;
		$this -> engine = FALSE;
		$this -> doors = 0;
	}

	function setup_car(){
		$this -> wheels = 4;
		$this -> hood = TRUE;
		$this -> engine = TRUE;
		$this -> doors = 5;
	}

}
$counter = 0;
$bmw = new Car();

do{
if ($counter == 0)
	echo "<h1> Before Assembly</h1>";
else echo "<h1> After Assembly</h1>";

echo "<p>Amount of wheels at BMW: " . $bmw -> wheels . "</p>" .
	"<p>The presence of a hood at BMW: " . $bmw -> hood . "</p>" .
	"<p>Amount of doors at BMW: " . $bmw -> doors . "</p>" .
	"<p>The presence of a engine at BMW: " . $bmw -> engine . "</p>";

	//Call a function
	$bmw -> setup_car();
	$counter++;
} while ($counter < 2);


?>
