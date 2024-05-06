<?php
    $hostname ='localhost';
    $username = 'root';
    $password = '';
    $database = '';

    $connectWithdb = new mysqli($hostname, $username, $password, $database);
    if($connectWithdb->connect_error){
        die('Connection Failed'. $connectWithdb->connect_error);
    }else{
        echo "<h1 style='color:green;'>Connected Successfully</h1>";
    }
    $sql_createdb = "CREATE DATABASE learning_database";
    $sql_query = $connectWithdb->query($sql_createdb);
    if($sql_query === true){
        echo "<h1 style='color:green;'>Database Created</h1>";  
    }else{
        echo "Error 404".$connectionWithDB->error;
    }

    $connectWithdb->close();
?>