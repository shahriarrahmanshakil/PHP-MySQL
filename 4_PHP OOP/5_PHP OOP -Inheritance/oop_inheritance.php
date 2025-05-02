<?php 
	#This class is define Fruit name, color 
	#Example of inheritance 

	class Fruit {
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
			echo "<b>Am I a straberry or Fruit ?</b>"."<br>";
			$this->intro();
		}
	}

	$strawberry = new strawberry("Strawberry", "Red");
	$strawberry->message();
	echo "<br>";
	// $strawberry->intro(); #this gives us Error because it's protected function.

	/**************************************************************************************************/
	echo "---------------------------------------------------------------------------------------<br>";

	#PHP - Overriding Inherited Methods

	class car {
		public $name;
		public $color;

		public function __construct($n, $c){
			$this->name = $n;
			$this->color= $c;
		}

		public function details(){
			echo "This car name is {$this->name} and color is {$this->color}";
		}
	}

	$honda = new car("Honda", "Black");
	$honda->details();

	class bmw extends car {
		public $cc;

		public function __construct($n, $c, $cc){
			$this->name = $n;
			$this->color = $c;
			$this->cc = $cc;
		}

		public function details(){
			echo "This car name is {$this->name} and color is {$this->color} also a huage cubic capacity{$this->cc}.";
		}
	}

	echo "<br>";
	$BMW = new bmw("BMW", "Blue", " 500 cc");
	$BMW->details();
	echo "<br>";


	/*****************************************************************************************************/
	echo "--------------------------------------------------------------------------------------------<br>";
	echo "<br>";

	#PHP - The final Keyword
	
	final class Book{
		public function say_hello(){
			echo "Hello Bangladesh";
		}
	}

	#this class can not inherit because of ___final class can not inherit 
	
	// class Bangla extends Book{
	// 	//some code.......
	// }




?>