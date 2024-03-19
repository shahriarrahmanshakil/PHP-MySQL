<?php
class student{
    public $name;
    public $classs;
    public $department;
    public $sessionn;
    public $college;
    
    function __construct($name,$classs,$department,$sessionn,$college)
    {
        $this->name = $name;
        $this->classs = $classs;
        $this->department = $department;
        $this->sessionn = $sessionn;
        $this->college = $college;
        
    }

    function __destruct()
    {
        
        echo "$this->name"."<br>";
        echo "$this->classs".",";
        echo "$this->department"."<br>";
        echo "$this->sessionn"."<br>";
        echo "$this->college";
    
    }
}
$student1 = new student("Shahriar Rahman Shakil", "MBA", "Management", "2017-18", "Dhaka College");

?>