<?php
class employe{
    private $ID;
    private $name;

    private static $Employedata = "data.txt";

    function __construct($ID,$name){
        $this->ID = $ID;
        $this->name = $name;
    }

    public function fullinfo(){
        return $this->ID.",".$this->name.PHP_EOL;
    }

    public function save(){
        $employes = file(self::$Employedata);
        file_put_contents(self::$Employedata,$this->fullinfo(),FILE_APPEND);
    } 

    public static function einfo_display(){

        $employeSS = file(self::$Employedata);
         
        echo "ID | Name";

        foreach($employeSS as $Employess){
            list($ID,$name) = explode(",",trim($Employess));
            echo "$ID | $name <br>";
        }


    }
    
}

?>