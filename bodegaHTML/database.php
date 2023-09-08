<?php 

         


session_start();
$DB_HOST=$_ENV["containers-us-west-171.railway.app"];
$DB_USER=$_ENV["root"];
$DB_PASSWOORD=$_ENV["hkSDoJGSXbCXTJK5FYBN"];
$DB_NAME=$_ENV["railway"];
$DB_PORT=$_ENV["7172"];
$db=mysqli_connect("DB_HOST","DB_USER","DB_PASSWOORD","DB_NAME","DB_PORT");
 ?>
