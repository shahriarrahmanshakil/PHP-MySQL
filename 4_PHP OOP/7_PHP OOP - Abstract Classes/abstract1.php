<?php
    abstract class books{
        public $name;

        abstract protected function info();

    }
    
    class novel extends books{
        public function info(){
            $this->name;
            echo $this->name;
        }
    }
    $b1 = new novel();
    $b1->name = "My Novel";
    $b1->info();
    
?>