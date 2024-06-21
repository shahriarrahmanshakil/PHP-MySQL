<?php

    abstract class parentClass {
        protected $name;
        protected $address;

        abstract protected function info($n,$a);
    }

    class childClass extends parentClass {

        public function info($n,$a){
            echo $n . $a;
        }

    }

    $test = new childClass();                      
    echo $test->info("Shakil","Jamalpur");



?>