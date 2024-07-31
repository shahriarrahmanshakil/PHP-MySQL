<?php
    trait test{
        public function sayhi(){
            echo "Hi From test trait <br>";
        }
    }

    trait test1{
        public function sayhi(){
            echo "Hi From test1 trait .";
        }
    }

    class testing{
        use test;
        use test1{
            test::sayhi insteadOf test1;
            test1::sayhi as hi;
        }
    }

    $b1 = new testing();
    $b1->sayhi();
    $b1->hi();
?>