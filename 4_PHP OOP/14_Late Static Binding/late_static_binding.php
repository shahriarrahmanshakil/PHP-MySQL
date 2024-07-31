<?php
    class test {
        protected static $name = "Shahriar Shakil";

        public function show(){
            echo static::$name;
        }
    }

    class test1 extends test{
        protected static $name = "Rakibul Islam";
    }

    $t = new test();
    $t->show();

    $t1 = new test1();
    $t1->show();
?>