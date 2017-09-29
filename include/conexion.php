<?php
$host="localhost";
$user="root";
$password="";
$db="abandono";
$mysqli=new mysqli($host,$user,$password, $db);
if($mysqli->connect_error){
  die('Error en la conexion' . $mysqli->connect_error);
} ?>
