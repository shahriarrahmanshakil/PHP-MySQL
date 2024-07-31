<?php
    trait information {
        public function hi(){
            echo "Hi Every One ";
        }
    }

    trait information1 {
        public function hello(){
            echo " Hello Every One";
        }
    }

    class myinfo1{
        use information,information1;
    }

    class myinfo2{
        use information;
        use information1;
    }

    $i1 = new myinfo1();
    $i1->hi();
    $i1->hello();

    echo "<br>";
    $i2 = new myinfo2();
    $i2->hi();
    $i2->hello();


?>