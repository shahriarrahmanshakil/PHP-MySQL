<?php 
class Pizza{ 
    public $brand;
    public $size;
    function set_brand($brand){ 
        $this->brand=$brand;
    }
    
   function get_brand(){ 
    return $this->brand;
   }

}

$food=new Pizza();
$food->set_brand("Dmninus");
echo $food->get_brand();


?>