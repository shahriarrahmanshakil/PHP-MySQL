<?php
    class calculation {
        public $a;
        public $b;
        public $c;

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
    $c1->a = 50;
    $c1->b = 30;

    $c2 = new calculation();
    $c2->a = 150;
    $c2->b = 18;

    echo "Sum Value of c1 : " . $c1->sum() . "<br>";
    echo 'Sub Value of c2 : ' .$c2->sub();
?>
    