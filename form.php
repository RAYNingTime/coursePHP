<?php
	const ADMIN_LOG = 'admin';
	const ADMIN_PASS = '123';
	$usernameList = ['Jonny', 'CoolGuy', 'CoolGuy1', 'EzBro', 'SQWOZ BAB'];
	$passwordList = ['john123', '31', '33333', '123', 'DE_DUST'];
	$login = false;
	$loginNumber;

	if (isset($_POST['username']) && isset($_POST['password'])) {
		for ($i = 0; $i < sizeof($usernameList); $i++) {
			if ($_POST['username'] == $usernameList[$i] && $_POST['password'] == $passwordList[$i]) {
				$login = true;
				$loginNumber = $i;
			}
		}	

		if ($login == true)
			echo "<h1> Welcome, " . $usernameList[$loginNumber] . "!</h1>";
		elseif  ($_POST['username'] == ADMIN_LOG && isset($_POST['submit']) && $_POST['password'] == ADMIN_PASS) {
			echo "<h1>You entered as Admin!</h1>";
		} else
			echo '<p style="color:red"> You have entered incorrect username or password! </p>';
	}

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<form action="form.php" method="post">

	<input type="username" placeholder = "Enter Username" name = "username">
	</br>
	<input type="password" placeholder = "Enter password" name = "password">
	</br>
	<input type="submit" name = "submit">

</form>




</body>
</html>
