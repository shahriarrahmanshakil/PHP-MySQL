<?php
    class base {
        public $name;

        public function __construct($n)
        {
            $this->name = $n;
        }

        public function show()
        {
            echo "Your Name : ".$this->name;
        }
    }
    // $baseClass = new base("Shahriar Rahman Shakil");
    // $baseClass->show();
    // echo $baseClass->name = "Tamim Iqbal";


    //useing private and protected access modofier added
    class baseClass {
        // protected $fullName;
        private $fullName;

        public function __construct($fn)
        {
            $this->fullName = $fn;
        }

        public function display()
        {
            echo "Your Full Name : ". $this->fullName;
        }
    }
    $test = new baseClass("Fahima Akther");
    // echo $test->fullName = "Fima Akter";
    echo $test-> display();

    class derived extends baseClass{
        public function show(){
            echo "You'r Name : ". $this->fullName;
        }
    }

    $baseClassis = new base("Raihan Molla Raju");
    // $baseClassis->display();
    $derivedis = new derived("Rakibul Islam");
    $derivedis->show();
?>