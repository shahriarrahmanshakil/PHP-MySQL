<?php
    class person {
        public $name;
        public $age;
        public $sex;

        function show(){
            echo "Name :".$this->name.'<br>'."Age :".$this->age.'<br>'."Sex :".$this->sex;
        }
    }
    $person1 = new person();
    $person1->name = "Shahriar Rahman Shakil";
    $person1->age = 27;
    $person1->sex = "Male";
    $person1->show();
    echo "<br>";
    echo "<br>";
    $person2 = new person();
    $person2->name = "Rafia Kabir Khan";
    $person2->age = 29;
    $person2->sex = "Female";
    $person2->show();
?>