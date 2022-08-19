<?php
include "db.php";
function createRows(){
	global $connection;
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
	
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);

		$hashFormat = "$2y$10$";
		$salt = "loremipsumdolorsitamet";
		$hashF_salt = $hashFormat . $salt;

		$password = crypt($password, $hashF_salt);

		$query = "INSERT INTO users(username,password) ";
		$query .= "VALUES ('$username', '$password')";
	
		$result = mysqli_query($connection, $query);
		if(!$result) {
			die('Query FAILED' . mysqli_error());
		} else
			echo "Record created";
	}
}

function showAllData(){
	global $connection;
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);
	if (!$result) {
		die ('Query FAILED' . mysqli_error());
	}
}


function updateRows(){
	global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	$username = mysqli_real_escape_string($connection, $username);
	$password = mysqli_real_escape_string($connection, $password);
	$id = mysqli_real_escape_string($connection, $id);

	$query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";

	$result = mysqli_query($connection, $query);
	if (!$result) {
		die ("Query error");
	} else
	echo "Record updated";
}

function deleteRows(){
	global $connection;
	$id = $_POST['id'];

	$id = mysqli_real_escape_string($connection, $id);

	$query = "DELETE FROM users ";
	$query .= "WHERE id = $id ";

	$result = mysqli_query($connection, $query);
	if (!$result) {
		die ("Query error" . mysqli_error($connection));
} else
echo "Record deleted";
}

?>
