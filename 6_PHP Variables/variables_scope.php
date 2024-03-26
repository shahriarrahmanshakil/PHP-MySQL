<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables scope</title>
</head>
<body>
    <h3>PHP Variables Scope</h3>
    <p>PHP has three different variable scopes:</p>
    <ul>
        <li>local</li>
        <li>global</li>
        <li>static</li>
    </ul>
    <h5>Global Scope</h5>
    <p>A variable declared outside a function has a GLOBAL SCOPE <br>and can only be accessed outside a function:</p>
    
    <?php
    $num = 20; //global scope
        function myTest(){
            echo $num; //error 
                        //can only be accessed outside a function:
    }
    myTest();
    echo $num;
    ?>

    <?php

        function myfun(){
            $message = "hello";
            echo $message;
        }
        myfun();

        echo $message; //erorr //local scope use only locally
    ?>

    <h3>PHP The global Keyword</h3>
    <?php
        $x = 10;
        $y = 20;

        //The global keyword is used to access a global variable from within a function.
        
        function myfunc(){
            global $x,$y,$z;
            $z = $x + $y;
        }
        myfun();
        echo $z;
    ?>

    <?php
    $a = 50;
    $b = 80;

    function myfunction(){
        $GLOBALS['c'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    myfunction();
    echo $c;
    
    ?>
</body>
</html>