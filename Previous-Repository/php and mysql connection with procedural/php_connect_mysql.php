<?php
#php and mysql connection with procedural format
$hostName = 'localhost';
$userName = 'root';
$password = '';

$databaseName = 'student';

$connection = mysqli_connect($hostName,$userName,$password,$databaseName);

if(!$connection){
    die('Connection failed');
}else{
    echo 'Connection Successfull with procedural formate';
}
?>