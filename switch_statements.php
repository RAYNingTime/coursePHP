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
	
	$number = 3;

	switch($number) {
		case 1: {
			echo "This is one!";
			break;
		}
		case 2: {
			echo "This is two!";
			break;
		}

		default :{
			echo "This is not 1 or 2!";
			break;
		}

	}
	
	?>


</body>
</html>