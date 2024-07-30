<?php
    class stationary{
        public static $name = "This is Book,pen and paper";

        // public static function all(){
        //     echo self::$name;
        // }

        // public function __construct($n)
        // {
        //     self::$name = $n;
        // }
    }

    class sub_stationary extends stationary{
        public static function all_sub(){
           echo parent::$name;
        }
    }
    // echo stationary::$name . "<br>";
    // stationary::all();
    // $s1 = new stationary("Stationary helpping Student");
    // $s1->all();

    $s2 = new sub_stationary();
    $s2->all_sub();
?>
