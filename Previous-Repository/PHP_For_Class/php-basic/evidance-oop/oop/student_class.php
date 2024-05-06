<?php
//Step 1:
class Student{   
   private $id;
   private $name; 
   
   private static $file_path="data.txt"; 
   
   //---------------constructor---------------//
   function __construct($_id,$_name){
	   $this->id=$_id;
	   $this->name=$_name;
	
   }
  
  //---------------csv function-------------------//
   public function csv(){
	 return $this->id.",".$this->name.PHP_EOL;   
   }
   
   //-----------save function-----------------//
   public function save(){
	   
	       $students=file(self::$file_path);  	   
	  	
		   file_put_contents(self::$file_path,$this->csv(),FILE_APPEND);
	   	   
	   
   }//end save	
       
   
   //---------------display_students-------------//
   
   public static function display_students(){
	   
	    $students=file(self::$file_path);
		
		echo "<b>ID | Name</b><br/>";
		foreach($students as $student){
				   list($id,$name)=explode(",",trim($student));
				   echo "$id | $name<br/>";   
	    }
				
		
   }   
   
 //-----------------end functions----------------   

}// Student class

?>