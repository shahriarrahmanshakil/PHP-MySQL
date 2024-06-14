<?php
    class student {
        public $FullName;
        public $class;
        public $Department;
        public $institution;

        function set_name($fn,$cl,$dep,$ins){
            $this->FullName = $fn;
            $this->class = $cl;
            $this->Department = $dep;
            $this->institution = $ins;
        }

        function get_name(){
            return $this->FullName. "<br>". $this->class. ','.$this->Department."<br>" .$this->institution;
        }
    }
    $rakib = new student();
    $rakib->set_name("Rakibul Islam","MSS","Economics","Habibulla Bahar University");
    echo $rakib->get_name();

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $raju = new student();
    $raju->set_name('Raihan Molla Raju','BSS', 'Bangla','Dhaka College');
    echo $raju->get_name();
?>