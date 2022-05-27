<?php

class Car{

	public $wheels = 4;
	protected $hood = TRUE;
	private $engine = TRUE;
	var $doors = 5;

	function showProperty(){
		echo	$this -> hood;
	}

	function showEngine(){
		echo $this -> engine;
	}
}

class Semi extends Car {
	function showProperty(){
		echo	$this -> hood;
	}
}

$bmw = new Car();
$semi = new Semi();

//Public allows you to use variable EVERYWHERE
//p.s. everywhere
echo $bmw -> wheels;

//Protected not allows to use out of class
//BUT allows to use in extended classes
//p.s. Inside of the classes or subclasses
$bmw -> showProperty();
$semi -> showProperty();

//Private allows to use ONLY in the class
//Where this variable was created
//p.s. Insode of the specific class
$bmw -> showEngine();

?>