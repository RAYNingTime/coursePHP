<?php 
include "db.php";
include "functions.php";

	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);
	if(isset($_POST['submit'])) {
		deleteRows();
	}

?>

<?php include = "includes/header.php";?>

<div class="container">
	<div class="col-sm-6">
	<h1 class="text-center">Delete</h1>
		<form action="login_delete.php" method = "post">

			<div class="form-group">
				<select name="id" id="">

				<?php
				while($row = mysqli_fetch_assoc($result)) {
					$id = $row['id'];

					echo "<option value='$id'>" . $id . "</option>";
				}
				?>

				</select>
			</div>

			<input class = "btn btn-primary" type="submit" name ="submit" value = "Delete">
			
		</form>
	</div>
</div>

<?php include "includes/footer.php";?>
