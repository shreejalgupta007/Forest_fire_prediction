<?php
//opens a new file to write
$data_file=fopen("test.txt","w");
$username=$_POST["username"];
$password=$_POST["password"];
$text_to_write=$username." ".$password;
//write data to server side file
fwrite($data_file, $text_to_write);
fclose($data_file);
?>
