<?php
 $connectwithdb = new mysqli('localhost','root','','learning_php_mysql');

    if($connectwithdb->connect_error){
        echo $connectwithdb->connect_error;
    }

    $sql_update =  "UPDATE student 
                    SET name = 'Abdulla al Mamun',
                    study = 'BBA',
                    department = 'zology',
                    institute = 'Bangla College'
                    WHERE id = 1";
    
    if($connectwithdb->query($sql_update) === TRUE){
        echo "Data is updated";
    }

?>