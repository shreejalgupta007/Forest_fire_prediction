<?php
$data_file=fopen("test2.txt","w");
$fullname=$_POST["fullname"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$re-enter password=$_["re-enter password"];
$text_to_write=$username." ".$password;
fwrite($data_file, $text_to_write);
fclose($data_file);
?>