<?php 
    class Fruit{
        public $name;
        public $color;

        function __construct($n, $c){
            $this->name = $n;
            $this->color = $c;
        }

        function __destruct(){
            echo "<br>"."This is the end of the object";
        }
    }

    $mango = new Fruit("Mango","Yellow-Orange");
    echo "$mango->name"."<br>";
    echo "$mango->color";
    echo "<br>";
?>