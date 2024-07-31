<?php
    trait test{
        public function hello(){
            echo "Hello from Trait";
        }
    }

    class A{
        public function hello(){
            echo "Hello from class A";
        }
    }

    class B extends A{
        use test;

        public function hello()
        {
            echo "Hello from class B";
        }
    }

    $b1 = new B();
    $b1->hello();

?>