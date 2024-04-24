<?php
class studentinfo(){
    private $name;
    private $Course;

    private static $datastore = "document.txt";

    function __construct($name,$Course){
            $this->name = $name;
            $this->Course = $Course;
    }

    function csv(){
        return $this->name." ".$this->Course.PHP_EOL;
    }

    function save(){
        $sdata = file(self::$datastore);
        file_put_contents(self::$datastore,$this->csv(),FILE_APPEND);

    }

    function dsinfo(){
        $sdata = file(self::$datastore);
        echo "<b> Name | Course </b><br>"
        foreach($sdata as $newstudent){
            list($name,$Course) = explode(" ",trim($newstudent));
            echo "$name|$Course <br/>";
        }
    }
}







?>