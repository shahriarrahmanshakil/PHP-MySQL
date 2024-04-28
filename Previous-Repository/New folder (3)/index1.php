<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <marquee behavior="" direction=""><?php echo date("d-m-Y H:i:s a");?></marquee>

    <?php

    class Human{
        //creating some properties of Human class 
        public $name;
        public $age;
        public $height;
        public $weight;

        //Creating Some Method of Human Class
        public function Walk(){
            echo $this->name." is Walking";
        }
        
        public function Eat(){
            echo $this->name." is eating";
        } 

    }

    $p1 = new Human();
    $p1->name = "Rafia";
    $p1->Walk();
 
    ?>


</body>
</html>