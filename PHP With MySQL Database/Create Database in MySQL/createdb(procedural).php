<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = '';

$connectWithdb = mysqli_connect($hostname, $username, $password, $database);
if(!$connectWithdb){
    die('Connection Failed'. mysqli_connect_error());
}else{
    echo "<h1 style='background-color:green;'>Connected Successfully</h1>";
}

    $sql_createdb = "CREATE DATABASE learning_database2";
    $sql_query = mysqli_query($connectWithdb, $sql_createdb);

    if($sql_query === true){
        echo "<h1 style='color:green;'>Database Created</h1>";
    }else{
        echo "Error Database Create Failed".mysqli_error($connectWithdb);
    }

    mysqli_close($connectWithdb);
?>