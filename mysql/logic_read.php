<?php
	$connection = mysqli_connect('localhost', 'root', '', 'users');

	if ($connection)
		echo "<h1>Connected.</h1>";

	$query = "SELECT * FROM users";

	$result = mysqli_query($connection, $query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="col-sm-6">

	<?php
	
	while ($row = mysqli_fetch_assoc($result)) {
		?>

		<pre>
			<?php
			
			print_r($row);

			?>
		</pre>

		<?php
	}


	/*
	Creates assoc array with names of columns from table where id - id, Username - username, Password - password
	
	while ($rows = mysqli_fetch_assoc($result)) {
		
		print_r($rows);
		echo "</br>";

	}
	*/

	/*
	Creates regular array with numbers where 0 - id, 1 - username, 2 - password

	while ($row = mysqli_fetch_row($result)) {
		
		print_r($row);
		echo "</br>";

	}
	*/



	?>

	</div>
</div>


</body>
</html>