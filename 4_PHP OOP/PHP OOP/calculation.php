<?php
    class calculation {
        public $a, $b, $c;

        function sum(){
            $this->c = $this->a + $this->b;
            return $this->c;
        }

        function sub(){
            $this->c = $this->a - $this->b;
            return $this->c;
        }
    }

    $c1 = new calculation();
    $c1->a = 20;
    $c1->b = 30;
    echo $c1->sum();

    $c2 = new calculation();
    $c2->a = 70;
    $c2->b = 30;
    echo $c2->sub();
?>