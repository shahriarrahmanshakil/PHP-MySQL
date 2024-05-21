<?php
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbname   = "university"; 
    
    $connection = mysqli_connect($hostName,$userName,$password,$dbname);
    
    if(!$connection){
        echo die(mysqli_connect_error());
    }

    $dataUpdate = "UPDATE student SET 
                            ID = 101,
                            Names = 'Shakil',
                            Email = 'shakil@gmail.com'";

    $queryUpdateData = mysqli_query($connection,$dataUpdate);
    
    if($queryUpdateData){
        echo "Data Updated";
    }else{
        echo mysqli_error($connection);
    }



    mysqli_close($connection);
?>