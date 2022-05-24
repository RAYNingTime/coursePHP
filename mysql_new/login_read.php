<?php
include "db.php";
include "functions.php";

showAllData();
?>

<?php include = "includes/header.php";?>

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


<?php include "includes/footer.php";?>