<?php
$file = "example.txt";

//Opens a file to 'w' - write something in it
$handle = fopen($file,'w');

fclose($handle);
?>