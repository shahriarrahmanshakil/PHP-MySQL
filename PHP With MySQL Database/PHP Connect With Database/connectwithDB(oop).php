<?php
#Connection With Database Object Oriented Programing(OOP)
# (i)hostname (ii) username (iii) password
# connect with Database step-2 fields
# Connection close()

    $hostname = 'localhost';
    $username = 'root';
    $password = '';

    //connect with oop formate
    $connectionWithDB = new mysqli($hostname, $username, $password);
        if($connectionWithDB->connect_error){
            die('Connectiion Failed'.$connectionWithDB->connect_error);
        }else{
            echo "<h1 style='color:green;'>Connected Successfully</h1>";
        }
        $connectionWithDB->close();

?>
