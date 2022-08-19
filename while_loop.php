<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>While loops</title>
</head>
<body>
	<?php
	
	$number = 0;

	while ($number < 4) {
		$number++;
		echo "</br> Hi!! </br>";
	}

	do {
		echo $number;
		$number--;
	} while ($number > 0);
	
	?>


</body>
</html>
