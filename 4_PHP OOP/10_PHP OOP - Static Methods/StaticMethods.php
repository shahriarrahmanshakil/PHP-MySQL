<?php
    class greeting{
        public static function wellcome(){
            echo "Hello php";
        }
    }
    // $message = new greeting();
    // echo $message->wellcome();
    greeting::wellcome();
    echo "<br>";
    ////////////////////////////////////////////////////////////////////

    class message{
        public static function hello(){
            echo "This is Hello Function";
        }

        public function __construct(){
            self::hello();
        }
    }
    new message();
    echo "<br>";

    //////////////////////////////////////////////////////////////////////////

    class A{
        public static function a(){
            echo "this is function A";
        }
    }

    class B{
        public function b(){
            echo A::a();
        }
    }

    $B = new B();
    echo $B->b();
    echo "<br>";

    ////////////////////////////////////////////////////////////////////////////////
?>