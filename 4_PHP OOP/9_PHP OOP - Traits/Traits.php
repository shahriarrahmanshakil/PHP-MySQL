<?php
    trait message{
        public function mymessage(){
            echo "Hello PHP";
        }
    }

    class barta {
        use message;
    }

    $mybarta = new barta();
    $mybarta->mymessage();
    echo "<br>";

    class barta2 {
        use message;
    }
    $mybarta2 = new barta2();
    $mybarta2->mymessage();


?>