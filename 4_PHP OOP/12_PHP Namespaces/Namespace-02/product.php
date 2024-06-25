<?php
    namespace product;

    class product{
        public function myProduct(){
            // echo "This is Product Class from product.php";
            $Newtest = new \test\product();
            $Newtest->myProduct();
        }
    }

    function hello(){
        echo "Hello from Product.php";
    }




?>