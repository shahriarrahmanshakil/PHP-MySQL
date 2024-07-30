<?php
    interface bird {
        function flying();
    }

    interface bird1{
        function eating();
    }

    class kabutor implements bird,bird1{
        public function flying()
        {
            echo "My kabutor is flying ";
        }

        public function eating()
        {
            echo " My kabutor is eating";
        }
    }

    class moyna implements bird {
        public function flying()
        {
            echo "My Moyna Talk to me";
        }
    }

    $b1 = new kabutor();
    $b1->flying();
    $b1->eating();

    echo "<br>";

    $m1 = new moyna();
    $m1->flying();







?>