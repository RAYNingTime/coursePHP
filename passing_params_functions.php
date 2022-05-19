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
	
	$names = ["Adie", "John", "Lui", "Irina"];

	function greeting($name) {
		echo "Hello, " . $name . "! </br>";
	}

	foreach ($names as $singleName)
		greeting($singleName);
	
	?>


</body>
</html>