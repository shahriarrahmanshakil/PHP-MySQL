<?php
    interface Animal{
        public function makeSound();
    }

    class cat implements Animal{
        public function makeSound(){
            echo "Meow";
        }
    }

    class dog implements Animal{
        public function makeSound(){
            echo "Brack";
        }
    }

    class mouse implements Animal{
        public function makeSound(){
            echo "Seuck";
        }
    }

    $cat   = new cat();
    $dog   = new dog();
    $mouse = new mouse();
    $animals = array($cat,$dog,$mouse);
    
    foreach($animals as $animal){
        $animal->makeSound();
    }


   

?>