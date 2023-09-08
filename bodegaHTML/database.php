<?php 

         
session_start();
$DB_HOST=$_ENV["DB_HOST"];
$DB_USER=$_ENV["DB_USER"];
$DB_PASSWOORD=$_ENV["DB_PASSWORD"];
$DB_NAME=$_ENV["DB_NAME"];
$DB_PORT=$_ENV["DB_PORT"];
$db=mysqli_connect("DB_HOST","DB_USER","DB_PASSWOORD","DB_NAME","DB_PORT");
 ?>
