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