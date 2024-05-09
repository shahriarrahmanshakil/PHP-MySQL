<?php
    $connectwithdb = new mysqli('localhost','root','');
    if($connectwithdb->connect_error){
            echo $connectwithdb->connect_error;
    }
    $sql_createdb = "CREATE DATABASE learning_php_mysql";
   
   if($connectwithdb->query($sql_createdb) === TRUE){
            echo "Database is Created";
   }


    $connectwithdb->close();
?>