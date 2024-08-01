<?php
    require 'product.php';
    require 'test.php';

    $myproduct = new product\product();
    $myproduct->myProduct();
    echo "<br>";

    $mytest = new test\product();
    $mytest->myProduct();
    echo "<br>";

    function hello(){
        echo "Hello from index.php";
    }

    hello();
    echo "<br>";
    product\hello();




?>