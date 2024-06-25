<?php
    class fruits {
        public static $Mango = "Mango is very sweet";
    }
    echo fruits::$Mango;
    echo "<br>";
    ////////////////////////////////////////////////////

    class flower {
        public static $rose = "I Love Rose";

        public function myrose(){
            return self::$rose;
        }

    }
    // echo flower::$rose;
    $myrose = new flower();
    echo $myrose->myrose();
    echo "<br>";
    /////////////////////////////////////////////////////////////////

    class man{
        public static $name = "This is My Name";
        public static $age = "My Age ***";

        public static function purpose(){
            return self::$name .'<br>'. self::$age;
        }
    }

    class women extends man{
        public function pur(){
            return parent::purpose();
        }
    }
    $m = new women();
    echo $m->pur();
    





?>