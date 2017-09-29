<?php
$host="localhost";
$user="root";
$password="";
$db="abandono";
$conn=new mysqli($host,$user,$password);
if($conn) {
//  echo '<h1>Connected to MySQL</h1>';
} else {
   echo '<h1>MySQL Server is not connected</h1>';
} ?>
