<?php
class studentinfo{
    private $ID;
    private $Name;
    private $Batch;

    private static $datastore = "document.txt";
    
    function __construct($ID,$Name,$Batch){
        $this->ID = $ID; 
        $this->Name = $Name;
        $this->Batch = $Batch;
    }

    function csv(){
        return $this->ID.",".$this->Name.",".$this->Batch.PHP_EOL;
    }
    
    function save(){
        $student_data = file(self::$datastore);
        file_put_contents(self::$datastore,$this->csv(),FILE_APPEND);
    }

    public static function display_studentinfo(){
        $student_data = file(self::$datastore);
        echo "<b>ID NO | Name | Course | Phone</b><br>";
        
        foreach($student_data as $NewStudent){
            list($ID,$Name,$Batch) = explode(",",trim($NewStudent));  
            echo "$ID | $Name | $Batch <br>";          
        };
    }
}




















?>