<h1>Create a PHP Constant</h1>
<h3>To create a constant, use the define() function.</h3>
<hr>
<?php
    define('newspaper','www.prothom-alo.com');
    echo newspaper."<br>";

    define("country_name","Bangladesh");
    echo country_name;
?>

<h1>PHP const keyword</h1>
<?php
    const city = "Dhaka";
    echo city;
?>

<h2>PHP Constant Arrays</h2>
<?php
    define("Fruits",["Mango","Banana","Guava","Painapel"]);
    echo Fruits[3].'<br>';
    echo Fruits[0];
?>

<h2>Constants are Global</h2>
<?php
    define("Book","Book is Best Friend");
    
    function mybook(){
        echo Book;
    }
    mybook();
?>