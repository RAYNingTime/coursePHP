<?php

class Car{
	function moveWheels(){
		echo "Wheels move";
	}
}


//Check for a method in class
if(method_exists("Car", "moveWheels")){

	echo "The Method does exist.";
} else
	echo "The Method does not exist.";


?>