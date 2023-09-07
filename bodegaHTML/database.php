<?php 

         
         $server = "containers-us-west-171.railway.app";
         $username = "root";
         $password = "hkSDoJGSXbCXTJK5FYBN";
         $database = "railway";

         //crear conexion

         $db=new mysqli($server,$username,$password,$database);

         if($db->connect_error){
         	die("Error al conectar con la base de datos".$db->connect_error);
         }
 ?>
