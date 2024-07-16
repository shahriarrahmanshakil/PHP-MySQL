<?php
class car {
    public $name;
    public $color;

    public function set_name($n){
        $this->name = $n;
    }
    public function get_name(){
        return $this->name;
    }

    public function set_color($c){
        $this->color = $c;
    }
    public function get_color(){
        return $this->color;
    }
}

$honda = new car();
$honda->set_name('Honda v100');
$honda->set_color('red');
echo "This is my new car ". $honda->get_name();
echo "<br>";
echo "My car color is " . $honda->get_color();

?>