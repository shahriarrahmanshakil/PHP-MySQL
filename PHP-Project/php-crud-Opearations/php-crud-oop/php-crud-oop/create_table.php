<?php
    $connectwithdb = new mysqli('localhost','root','','learning_php_mysql');

    if($connectwithdb->connect_error){
        echo $connectwithdb->connect_error;
    }
    $sql_create_table = "CREATE TABLE student
                                            (id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
                                            name varchar(50), 
                                            study varchar(50), 
                                            department varchar(50), 
                                            institute varchar(50))";
   if($connectwithdb->query($sql_create_table) === TRUe){
        echo " table is created";
   }else{
    echo $connectwithdb->error;
   }
   $connectwithdb->close();
?>