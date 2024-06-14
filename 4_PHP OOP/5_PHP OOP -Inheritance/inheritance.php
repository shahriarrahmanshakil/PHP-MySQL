<?php
    //Base Class 
    class employee
    {
        public $name;
        public $age;
        public $salary;

        function __construct($n,$a,$s)
        {
            $this->name = $n;
            $this->age = $a;
            $this->salary = $s;
        }

        function info()
        {
            echo "<h2>Employee Profile</h2>";
            echo "Employee Name : ". $this->name . "<br>";
            echo "Employee Age : ". $this->age."<br>";
            echo "Employee Salary : ". $this->salary;
        }
    }

    //Derived Class
    class manager extends employee 
    {   
        public $ta = 2000;
        public $pa = 3000;
        // public $totalsalary;

        function info()
        {
            $this->salary += $this->ta + $this->pa;
            echo "<h2>Manager Profile</h2>";
            echo "Manager Name : ". $this->name . "<br>";
            echo "Manager Age : ". $this->age."<br>";
            echo "Manager Salary : ". $this->salary;
        }
    }


    $e1 = new employee('Shakil', 27, 10000);
    $e2 = new manager('Shahriar', 28, 20000);
    $e1->info();
    $e2->info();
?>
