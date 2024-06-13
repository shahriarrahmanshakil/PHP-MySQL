<?php
    class math {
        public $x;
        public $y;
        public $z;

        function multiplication(){
            $this->z = $this->x * $this->y;
            return $this->z;
        }

        function division(){
            $this->z = $this->x / $this->y;
            return $this->z;
        }
    }
    $mycalculation = new math();
    $mycalculation->x = 9;
    $mycalculation->y = 7;

    echo $mycalculation->multiplication();
    echo "<br>";
    echo $mycalculation->division();


















?>