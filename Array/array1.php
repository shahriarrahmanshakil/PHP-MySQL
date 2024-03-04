<?php

// $Books = array("history","Nobel","Politics");
// foreach($Books as $NewBook){
//     echo "$NewBook.<br>";
// // }
// $cars = array("a","b","c");
// // var_dump($cars);
// array_push($cars,"D");
// var_dump($cars);


// $books = array("subject1"=>"Story","subject2"=>"history");
// $books["subject2"]="olitics";
// echo $books["subject2"];
// var_dump($books);

// foreach($books as $x=>$y){
//     echo "$x:$y <br>";
// }


// $cars = array(array("A",1,5),array("B",2,6),array("C",3,7),array("D",4,8));

// echo $cars[0][0].$cars[0][1].$cars[0][2]."<br>";
// echo $cars[1][0].$cars[1][1].$cars[1][2]."<br>";
// echo $cars[2][0].$cars[2][1].$cars[2][2]."<br>";
// echo $cars[3][0].$cars[3][1].$cars[3][2];
// $x = 75;
  
// function myfunction() {
//     global $x;
//     echo $x;
// }

// myfunction()



// class Fruit{
//     public $name;
//     public $color;

//     function set_name($name){
//         $this->name = $name;
//     }

//     function get_name(){
//         return $this->name;
//     }
// }
// $apple = new Fruit();
// $apple->set_name('Apple');
// echo $apple->get_name();

// $banana = new Fruit();
// $banana->set_name("Banana");
// echo $banana->get_name();

$arr = array(10,20,10,20,30,20,40);
Natsort($arr);
print_r ($arr);










?>