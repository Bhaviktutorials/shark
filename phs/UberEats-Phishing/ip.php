<?php

if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check if ip is pass from proxy
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }

$browser = $_SERVER['HTTP_USER_AGENT'];
$useragent = "-----------------------------------------------\r\n" . "User-Agent: " . $browser;

$user = get_current_user(); 

$file = 'ip.txt';  //this is the file to which the IP address will be written; name it your way.
$DEREK = "\r\n" . "------------------------------------------------\r\n" ."IP: " . $ipaddress;

$currentuser = "\r\n" . "------------------------------------------------\r\n" . "Current logged in user: " . $user ."\r\n" . "------------------------------------------------\r\n";

$fp = fopen($file, 'a');
fwrite($fp, $DEREK);
fwrite($fp, $useragent);
fwrite($fp, $currentuser);


fclose($fp);
