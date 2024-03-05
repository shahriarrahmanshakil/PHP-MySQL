<?php
class Fruit {
    public $name;
    public $color;

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color = $color; 
    }

    function get_color(){
        return $this->color;
    }

}

$Apple = new Fruit();
$Apple->set_name("Apple");
$Apple->set_color("Green");
echo "Name : " . $Apple->get_name();
echo "<br>";
echo "Color : " . $Apple->get_color();






?>