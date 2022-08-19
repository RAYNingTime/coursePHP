<?php

// PASSWORD_DEFAULT - use the default algoritm to encrypt password
// cost - amount of time, that is going to produce a password
// 'cost' => 10  ---> $2y$10$ojyYHIFsBtAdGIi6.I.PwOXrWp//n56KZFPk598AjJ83pdX1qP7xS
// 'cost' => 14  ---> $2y$14$zy.IUR6qrRizzFHiYonnC.y8H67UxpC2Ka8kqW0W67VON1n6T6FJS
	echo password_hash('password', PASSWORD_DEFAULT, array('cost' => 10));
	echo password_hash('password', PASSWORD_DEFAULT, array('cost' => 14));

// PASSWORD_BCRYPT - Used to create a hash with CRYPT_BLOWFISH algorithm ($2y$ with indifier)

?>
