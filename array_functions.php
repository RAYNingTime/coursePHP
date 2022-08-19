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
	// All functions :https://www.php.net/manual/en/ref.array

	$list = [4,5,6,7,8];

	echo max($list) . "</br>";
	echo min($list) . "</br>";

	print_r($list);

	sort($list);

	print_r($list);
	
	?>


</body>
</html>
