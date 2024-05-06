<?php
$hostname ='localhost';
$username = 'root';
$password = '';

//connected with Database Procedural formate
$connectionWithDB = mysqli_connect($hostname, $username, $password);
if(!$connectionWithDB){
    die('Connection Failed'.mysqli_connect_error());
}else{
    echo "<h1 style='color:green;'>Connected Successfully</h1>";
}

mysqli_close($connectionWithDB);
?>