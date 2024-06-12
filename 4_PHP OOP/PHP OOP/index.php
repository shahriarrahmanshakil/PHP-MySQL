<?php
    class fruits {
        public $name;
        public $color;
        public $weight;

        function set_name($name,$color,$weight){
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        function get_name(){
            return  $this->name.$this->color.$this->weight;
        }
    }
    $apple = new fruits();
    $apple->set_name("Apple ","Red ","120gm");
    echo $apple->get_name();
    $apple->name = "Mango";
    $apple->color = "Yellow";
    $apple->weight = "100";

    // echo $apple->name."<br>";
    // echo $apple->color."<br>";
    // echo $apple->weight;

  










?>


