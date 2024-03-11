<?php session_start();

 unset($_SESSION["sessionName"]);
 session_destroy();
 header("location:login.php");
?>