<?php
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbname   = "university"; 
    
    $connection = mysqli_connect($hostName,$userName,$password,$dbname);
    
    if(!$connection){
        echo die(mysqli_connect_error());
    }

    #delete code include later
    #28-03-24

    mysqli_close($connection);
?>