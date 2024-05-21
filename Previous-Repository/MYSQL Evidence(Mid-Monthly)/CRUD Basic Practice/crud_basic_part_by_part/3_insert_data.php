<?php
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbname   = "university"; 
    
    $connection = mysqli_connect($hostName,$userName,$password,$dbname);
    
    if(!$connection){
        echo die(mysqli_connect_error());
    }

    $dataInsert = "INSERT INTO student (ID,Names,Email)
                   VALUES (102,'Rahman','rahman321@gmail.com')";
    
    $query_datainsert = mysqli_query($connection,$dataInsert);

    if($query_datainsert){
        echo "Data is Inserted";
    }else{
        echo $dataInsert.''.mysqli_error($connection);
    }



    mysqli_close($connection);
?>