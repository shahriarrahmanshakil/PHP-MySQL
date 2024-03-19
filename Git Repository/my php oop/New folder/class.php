<?php

class studentinfo{
    private $ID;
    private $Name;
    private $Course;
    private $Phone;

    private static $datastore = "document.txt";
    
    function __construct($ID,$Name,$Course,$Phone){
        $this->ID = $ID; 
        $this->Name = $Name;
        $this->Course = $Course;
        $this->Phone = $Phone;
    }

    function csv(){
        return $this->ID.",".$this->Name.",".$this->Course.",".$this->Phone.PHP_EOL;
    }
    
    function save(){
        $student_data = file(self::$datastore);
        file_put_contents(self::$datastore,$this->csv(),FILE_APPEND);
    }

    public static function display_studentinfo(){
        $student_data = file(self::$datastore);
        echo "<b>ID NO | Name | Course | Phone</b><br>";
        
        foreach($student_data as $NewStudent){
            list($ID,$Name,$Course,$Phone)=explode(",",trim($NewStudent));  
            echo "$ID | $Name | $Course | $Phone <br>";          
        }
    }
}




















?>