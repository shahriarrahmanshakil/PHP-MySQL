<?php
    $db_connection = mysqli_connect('localhost','root','','find_info');

    if(!$db_connection ){
        die("Connection Failed : " . mysqli_connect_error());
    }
    // echo "Connected Successfull";

?>
