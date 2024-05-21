<?php
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbname   = "university"; 
    
    $connection = mysqli_connect($hostName,$userName,$password,$dbname);
    
    if(!$connection){
        echo die(mysqli_connect_error());
    }

    $CreateTable ="CREATE TABLE student(ID INT(5) PRIMARY KEY,Names varchar(20),Email varchar(30) )";
    
    if(mysqli_query($connection,$CreateTable)){
        echo "Table is Created";
    }else{
        echo mysqli_error($connection);
    }

    mysqli_close($connection);
?>