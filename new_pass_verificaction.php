<?php

	$password_from_DB = password_hash('password', PASSWORD_DEFAULT, array('cost' => 10));
	
	//Password from Data Base
	$password = 'password';

	if (password_verify($password, $password_from_DB))
		echo "<h1>Welcome!!</h1>";

	//So there is no need to somehow implement pass from user, you just need to use function.




?>
