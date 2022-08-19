<?php
$file = "example.txt";

//Opens a file to 'r' - read something from file
if($handle = fopen($file,'r')) {

	
	//Second parameter - amount of bites (bite == character)
echo $content = fread($handle, 12) . "<br>";
	//After it reads something it cannot read the same info again
echo $content = fread($handle, 4) . "<br>";
	//Use "filesize" to show ALL data
echo $content = fread($handle, filesize($file)) . "<br>";


	fclose($handle);
} else
echo "The application was not able to write on the file";



?>
