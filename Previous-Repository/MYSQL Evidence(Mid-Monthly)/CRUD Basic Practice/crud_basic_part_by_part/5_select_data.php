<?php
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbname   = "university"; 
    
    $connection = mysqli_connect($hostName,$userName,$password,$dbname);
    
    if(!$connection){
        echo die(mysqli_connect_error());
    }

    $dataSelect = "SELECT * FROM student";
    $queryData = mysqli_query($connection,$dataSelect);
    mysqli_num_rows($queryData);

    if(mysqli_num_rows($queryData) > 0){
        while($dataArr = (mysqli_fetch_assoc($queryData))){;
        echo $dataArr['ID']." ".$dataArr['Names']." ".$dataArr['Email']."<br>";
    }
    }else{
        echo "No Data Found";
    }


    mysqli_close($connection);
?>