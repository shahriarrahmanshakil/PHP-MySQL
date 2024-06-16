<?php
    class fruits{
        public $name;
        public $color;
        public $weight;

        public function __construct($n,$c,$w){
            $this->name = $n;
            $this->color = $c;
            $this->weight = $w;
        }

        public function fruitsInfo(){
            return "Name : {$this->name} <br> Color : {$this->color} <br> Weight : {$this->weight}";
        }
    }

    class newFruit extends Fruits{
        public $category;

        public function __construct($n,$c,$w,$cat){
                    $this->name = $n;
                    $this->color = $c;
                    $this->weight = $w;
                    $this->category = $cat;
        }

        public function newFruitsInfo(){
            return "Name : {$this->name} <br> Color : {$this->color} <br> Weight : {$this->weight} <br> Category : {$this->category}";
        }
    }

    $mango = new fruits("Mango","Yellow and Green","300g");
    echo $mango->fruitsInfo();

    echo "<br>";
    echo "<br>";

    $orange = new fruits("Orange","Green and Orange","200g");
    echo $orange->fruitsInfo();

    echo "<br>";
    echo "<br>";

    $jackfruit = new newFruit ("Jack-Fruit","Green","1200g","Duashila");
    echo $jackfruit->newFruitsInfo();
    echo "<br>";
    echo "<br>";

    $Banana = new newFruit("Banana","Yellow","50g","Sobri");
    echo $Banana->newFruitsInfo();



?>