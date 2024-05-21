<?php
#php and mysql Connection with OOP formate 
$hostName = 'localhost';
$userName = 'root';
$password = '';

$databaseName ='student';
$connection = new mysqli($hostName,$userName,$password,$databaseName);
if($connection->connect_error){
    die("Connection failed".$connection->connect_error);
}else{
    echo "Congratulations Successfully connected";
}
?>