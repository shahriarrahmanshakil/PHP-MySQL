<?php
    abstract class car{
        public $name;

        public function __construct($n)
        {
            $this->name = $n;
        }

        abstract public function intro():string;
    }

    class audi extends car{
        public function intro(): string
        {
            return "You'r New $this->name ";
        }
    }

    class volvo extends car{
        public function intro(): string
        {
            return "My New $this->name supper fast";
        }
    }

    class honda extends car{
        public function intro(): string
        {
            return "Japanies New $this->name";
        }
    }

    $audi = new audi("Audi");
    echo $audi->intro();
    echo "<br>";

    $volvo = new volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";

    $honda = new honda("Honda");
    echo $honda->intro();

?>