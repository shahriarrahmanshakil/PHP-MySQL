<?php
    class employee{
        public $name;
        public $age;
        public $salary;

        function __construct($n, $a, $s)
        {
            $this->name = $n;
            $this->age = $a;
            $this->salary = $s;
        }

        function info(){
            echo "<h1>Empolyee Information</h1>";
            echo "Empolyee Name : ". $this->name . "<br>";
            echo "Empolyee Age : ". $this->age . "<br>";
            echo "Empolyee Salary : ". $this->salary . "<br>";
        }
    }

    class manager extends employee {
        public $ta = 3000;
        public $phone = 5000;
        public $total_salary;

        function manager_info(){
            $this->total_salary = $this->ta + $this->phone +$this->salary;

            echo "<h1>Manager Information</h1>";
            echo "Manager Name : ". $this->name . "<br>";
            echo "Manager Age : ". $this->age . "<br>";
            echo "Manager Salary : ".$this->total_salary . "<br>";
        }
    }

    $e1 = new employee("Shahriar Rahman Shakil", 27, 20000);
    $e1->info();

    $m1 = new manager("Rakibul Islam",30,30000);
    $m1->manager_info();






?>