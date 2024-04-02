<?php 
class A{ 
    public $name ="Hello!";
}

class B{  
    public $brand ="my class!";
}

$a = new A();
$b = new B();

var_dump($a instanceof A);
?>