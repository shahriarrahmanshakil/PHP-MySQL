<?php
#Class Syntax(Basic Syntax)
Class Student {

    //Code goes here

}
?>

<?php
Class Fruit{
    #properties
    public $name;
    public $color;

    #Methods
    function set_name($name){
        $this->name = $name;
    }
    function set_color($color){
        $this->color = $color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}
$Mango = new Fruit();
$Mango->set_name("Mango");
$Mango->set_color(" Green");
echo $Mango->get_name();
echo $Mango->get_color()."<br>";

$Lemon = new Fruit();
$Lemon->set_name("Lemon");
echo $Lemon->get_name();



?>