<?php
$connectwithdb = mysqli_connect("localhost","root","","learning_php_mysql");
    if($connectwithdb == TRUE){
        echo "";
    }else{
        die(mysqli_error($connectwithdb));
    }
?>