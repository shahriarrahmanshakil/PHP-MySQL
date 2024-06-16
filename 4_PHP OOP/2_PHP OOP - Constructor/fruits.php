<?php
// class man{
//     public $name;
//     public $age;
//     public $address;

//     function info($name,$age,$address){
//         $this->name = $name;
//         $this->age = $age;
//         $this->address = $address;
//         return $this->name.$this->age.$this->address;
//     }
// }
// $x = new man();
// echo $x->info("This is oop php","23", "dhaka");

// $y = new man();
// echo $y->info("Shakil","25","Mirpur");

// $shakil = new man();
// $shakil->name = "Shahriar";
// echo $shakil->name;

// $b = new man();
// $b->name = "Rahman";
// echo $b->name;

?>


<?php

class fruit{
      public $name;
      public $color;

      public function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
      }
      public function intro(){
        echo "the fruit is".$this->name."and the color is".$this->color;
      }
    }

    $fruit =new fruit("APPLE","RED");
    $fruit->intro();

?>