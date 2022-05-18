<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<?php
	
	//More old way of declaration of the array
	$numberList = array(13,53,63,32, '434','<h3>Hello</h3>',2);

	//More new way of declaration of the array
	$anotherList = [13,53,63,32, '434','<h3>Hello</h3>',2];
	

	//Print all the array
	print_r($numberList);
	echo "</br>";
	echo "</br>";
	echo "</br>";
	//Print all the array
	print_r($anotherList);

	?>


</body>
</html>