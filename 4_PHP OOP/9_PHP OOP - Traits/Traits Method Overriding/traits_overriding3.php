<?php
    trait private_test{
        private function hello(){
            echo "hello from private_test trait";
        }
    }

    class p_test{
        use private_test{
            private_test::hello as public hi;
        }
    }

    $p_t = new p_test();
    $p_t->hi();
?>