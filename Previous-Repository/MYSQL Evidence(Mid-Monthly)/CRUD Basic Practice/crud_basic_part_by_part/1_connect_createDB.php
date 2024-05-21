<?php
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    
    $connection = mysqli_connect($hostName,$userName,$password);
    
    if(!$connection){
        echo die(mysqli_connect_error());
    }

    $DataBaseName = "CREATE DATABASE University";
    $CreateDataBase = mysqli_query($connection,$DataBaseName);

    if($CreateDataBase){
        echo "DataBase Create Successfully";
    }else{
        echo mysqli_error($connection);
    }
    
    mysqli_close($connection);
?>