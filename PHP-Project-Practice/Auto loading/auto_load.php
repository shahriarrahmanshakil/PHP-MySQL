<?php
    // require "classes/first.php";
    // require "classes/seceond.php";

    // $test_first = new first();
    // echo "<br>";
    // $test_seceond = new seceond();


    ////////////////////////////////////////////
    
    //using auto loading function 

    function __autoload($class){
        require "classes/". $class .".php";
    }


?>