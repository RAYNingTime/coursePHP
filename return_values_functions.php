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
	
	function addNumbers($firstNum, $secondNum) {
		$sum = $firstNum + $secondNum;

		return $sum;
	}
	
	$firstNum = 5;
	$secondNum = 4.5;

	echo "<h1>" . $firstNum . " + " . $secondNum . " = " . addNumbers($firstNum, $secondNum) . "</h1>";

	?>


</body>
</html>
