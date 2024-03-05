<?php
class studentinfo1{
    private $ID;
    private $Name;
    private $Course;
    private $Phone;

    private static $data_store1="document1.txt";

    function __construct($ID,$Name,$Course,$Phone)
    {
        $this->ID     = $ID;
        $this->Name   = $Name;
        $this->Course = $Course;
        $this->Phone  = $Phone;
    }

    function csv(){
        return $this->ID.",".$this->Name.",".$this->Course.",".$this->Phone.PHP_EOL;
    }

    function save(){
        $student_data1 = file(self::$data_store1);
        file_put_contents(self::$data_store1,$this->csv(),FILE_APPEND);
    }
}



?>