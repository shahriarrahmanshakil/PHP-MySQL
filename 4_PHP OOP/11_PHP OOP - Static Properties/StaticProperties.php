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





?>