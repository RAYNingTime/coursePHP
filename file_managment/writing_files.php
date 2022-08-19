<?php
$file = "example.txt";


//Opens a file to 'w' - write something in it
if($handle = fopen($file,'w')) {

	fwrite($handle, "Lmao, this is some text");

	fclose($handle);
} else
echo "The application was not able to write on the file";



?>
