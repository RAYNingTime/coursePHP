<?php
include "db.php";

function createRows(){
	global $connection;
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
	
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
		$query = "UPDATE users 
	SET username = '$username', password = '$password'
	WHERE id = $id";
	$result = mysqli_query($connection, $query);
	if (!$result) {
		die ("Query error");
	} else
	echo "Record updated";
}

function deleteRows(){
	global $connection;
	$id = $_POST['id'];

	$query = "DELETE FROM users ";
	$query .= "WHERE id = $id ";

	$result = mysqli_query($connection, $query);
	if (!$result) {
		die ("Query error" . mysqli_error($connection));
} else
echo "Record deleted";
}

?>