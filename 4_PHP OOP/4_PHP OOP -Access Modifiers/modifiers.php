<?php
//Access Modifiers
class furniture{
    public $name;
    protected $quality;
    private $color;
}
$chair = new furniture();
echo $chair->name = "My Chair";
$chair->$quality; // gives an error because protected
$chair->color; // gives an error because private
?>