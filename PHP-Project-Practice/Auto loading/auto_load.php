<?php
    // require "classes/first.php";
    // require "classes/seceond.php";

    // $test_first = new first();
    // echo "<br>";
    // $test_seceond = new seceond();


    ////////////////////////////////////////////
    
    //using auto_loading function 
    
    function my_autoloader($class) {
        include 'classes/' . $class . '.class.php';
    }
    
    if (!function_exists('spl_autoload_register')) {
        spl_autoload_register('my_autoloader');
    } else {
        echo "spl_autoload_register() already defined.";
    }
    new first();
?>