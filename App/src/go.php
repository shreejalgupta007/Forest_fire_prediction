<?php
//opens a new file to write
$data_file=fopen("test2.txt","w");
$fullname=$_POST["fullname"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$re-enter password=$_["re-enter password"];
$text_to_write=$username." ".$password;
//writes on a server side file
fwrite($data_file, $text_to_write);
fclose($data_file);
?>
