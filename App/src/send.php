<?php
//opens a new file to write
$data_file=fopen("test1.txt","w");
$email=$_POST["email"];
$text_to_write=$email;
//write data to server side file
fwrite($data_file, $text_to_write);
fclose($data_file);
?>
