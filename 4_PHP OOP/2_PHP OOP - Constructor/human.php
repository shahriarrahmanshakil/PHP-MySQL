<?php
    class human{
        public $name;
        public $age;

        function __construct($n="no value", $a=0)
        {
           $this->name = $n;
           $this->age = $a; 
        }

        function show()
        {
            echo "Your Name is : " . $this->name ."<br>";
            echo "Your Age is : " . $this->age ."<br>";
        }
    }

    $h1 = new human('Tamim Iqbal','35');
    $h2 = new human('Musfiqur Rahim','33');
    $h3 = new human('Rakibul Islam','30');
    
    $h1->show();
    $h2->show();
    $h3->show();



?>