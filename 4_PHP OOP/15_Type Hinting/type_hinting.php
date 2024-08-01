<?php
function hello(int $name){
    echo $name + 10;
}
hello(90);
echo "<br>";

function fruits(array $fruit){
    foreach($fruit as $frt){
        echo $frt;
    }
}
fruits(["Banana","Orange","Mango"]);

echo "<br>";
echo "<br>";

class school{
    public function getnames(student $names){
        foreach($names->names() as $name){
            echo $name;
        }
    }

}

class student{
    public function names(){
        return ['Shahriar','Rahman','Shakil'];
    }
}

$sch = new school();
$std = new student();

$sch->getnames($std);
?>