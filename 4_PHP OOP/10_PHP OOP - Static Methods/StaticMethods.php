<?php
    class greeting{
        public function wellcome(){
            echo "Hello php";
        }
    }
    $message = new greeting();
    echo $message->wellcome();
?>