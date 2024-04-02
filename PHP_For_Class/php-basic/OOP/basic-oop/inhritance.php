<?php 
class A{
 function __destruct()
 {
    echo "Bye"; 
 }

 function Show(){ 
    echo "This is my Super class"."<br/>";
 }

function __construct()
{
    echo "This is our super class!";
}

}

class B extends A{
    public $address;
    public $phone;
    function Show(){ 
        echo "This is my Super class"."<br/>";
        echo " This is 2nd child class"."<br>";
        echo " This is 3nd child class"."<br>";
    }
}

$b = new B();
// $b->info();
$b->Show();

?>