<?php
class Student {
    public $name;
    public $department;
    public $sessionn;

    function __construct($name,$department,$sessionn){
        $this->name = $name;
        $this->department = $department;
        $this->sessionn = $sessionn;
    }
    function get_name(){
        return "Name : ".$this->name;
    }
    function get_department(){
        return $this->department;
    }
    function get_sessionn(){
        return $this->sessionn;
    }
}
$student1 = new Student("Shahriar","Finance","2019-20");
echo $student1->get_name()."<br>";
echo $student1->get_department()."<br>";
echo $student1->get_sessionn()."<br>";

echo "<br>";
echo "<br>";


$student2 = new Student("Rahman","Management","2017-18");
echo $student2->get_name()."<br>";
echo $student2->get_department()."<br>";
echo $student2->get_sessionn()."<br>";

echo "<br>";
echo "<br>";

$student3 = new Student("Shakil","Accounting","2015-16");
echo $student3->get_name()."<br>";
echo $student3->get_department()."<br>";
echo $student3->get_sessionn()."<br>";




?>