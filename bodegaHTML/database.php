<?php 

         
         $server = "localhost";
         $username = "root";
         $password = "";
         $database = "productos";

         //crear conexion

         $db=new mysqli($server,$username,$password,$database);

         if($db->connect_error){
         	die("Error al conectar con la base de datos".$db->connect_error);
         }
 ?>