<?php
session_start();

    $sessioninfo = $_SESSION['login'];
    if(empty($sessioninfo)){
        header('location:login.php');
    }

echo "Hello IDB";
?>
<button>
    <a href="logout.php">Logout</a>
</button>