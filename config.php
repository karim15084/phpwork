<?php

//Host Name / IP Address
$server = "localhost"; //127.0.0.1
// User MySQL Server
$user = "root";
//Password User
$pass = "";
//DB name
$db = "student";

$conn = mysqli_connect($server,$user,$pass,$db);

if(!$conn){
   echo "ไม่สามารถเชื่อมต่อกับข้อมูลได้";
}



?>