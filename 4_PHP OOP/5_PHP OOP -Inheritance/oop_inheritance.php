<?php 
	#This class is define Fruit name, color 
	#Example of inheritance 

	class Fruit{
		public $name;
		public $color;

		public function __construct($n, $c){
			$this->name  = $n;
			$this->color = $c;
		}

		#public fuction
		// public function intro(){
		// 	echo "This Fruit name is {$this->name} and color is {$this->color}";
		// }

		#protected function
		protected function intro(){
			echo "This Fruit name is {$this->name} and color is {$this->color}";
		}
	}

	//$painaple = new Fruit("Painapel", "Painish-Orange");
	//$painaple->intro();

	class strawberry extends Fruit{
		public function message(){
			echo "<b>Am I a straberry or Fruit ?</b>";
			$this->intro();
		}
	}

	$strawberry = new strawberry("Strawberry", "Red");
	$strawberry->message();
	echo "<br>";
	// $strawberry->intro(); #this gives us Error because it's protected function.


?>