<?php
    class person {
        public static $name = "Shahriar Rahman Shakil";

        public static function myName(){
            echo self::$name;
        }

    }
    person::myname();
    echo "<br>";
    //////////////////////////////////////////////////////////////

    class base {
        public static $name = "Tamim Iqbal";

        public static function me(){
            echo self::$name;
        }

        public function __construct($n){
            self::$name=$n;
        }
    }
    // $mybase = new base("Rakibul Islam");
    // echo $mybase->me();
    // // echo base::me();

    class Derived extends base {
        public static function show(){
            echo parent::$name;
        }
    }
    Derived::show();







?>