<?php session_start();

 unset($_SESSION["sname"]);
 session_destroy();
 header("location:login.php");
?>