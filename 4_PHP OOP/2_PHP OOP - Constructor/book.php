<?php
    class book{
        public $name;
        public $category;
        public $theme;

        function __construct($n,$c,$t){
            $this->name = $n;
            $this->category = $c;
            $this->theme = $t;
        }

        function show(){
            return 'Book Name : '.$this->name.'<br>'.'Category : '. $this->category.'<br>'.'Theme : '.$this->theme;
        }
    }
    $FourthRevelotation = new book("Bangladesh and Fourth Revelotaion","Development","Revelotation");
    echo $FourthRevelotation->show();
    echo "<br>";
    echo "<br>";
    $Need = new book("NEED","Basic English Grammar","English Improvement");
    echo $Need->show();









?>