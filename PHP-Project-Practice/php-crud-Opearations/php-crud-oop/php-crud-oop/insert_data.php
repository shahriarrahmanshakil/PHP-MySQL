<?php
     $connectwithdb = new mysqli('localhost','root','','learning_php_mysql');

     if($connectwithdb->error){
          echo $connectwithdb->error;
     }

     $insert_data = "INSERT INTO student(name,study,department,institute)
                    VALUES('Shahriar Rahman Shakil','MBA','Management','Dhaka College')";
     
     if($connectwithdb->query($insert_data) === TRUE){
          echo "Data is Inserted";
     }

?>