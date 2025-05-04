<?php 
	abstract class Shape {
		abstract public function calculateArea();
	}

	// class Circle{

	// }

	class Rectangle extends Shape{
		public $weight;
		public $height;

		public function Area($w, $h){
			$this->weight = $w;
			$this->height = $h;
		}

		public function calculateArea(){
			$calculateArea = $this->weight * $this->height;
			echo "The Area is $calculateArea";
		}
	}

	$area = new Rectangle();
	$area->Area(30,90);
	$area->calculateArea();
	echo "<br>";
	echo "---------------------------------------------------------------------------------";
	///////////////////////////////////////////////////////////////////////////////////////////



	abstract class Animal {
		abstract public function makeSound();
	}

	class Dog extends Animal {
		private $sound;

		public function __construct($s){
			$this->sound = $s;
		}

		public function makeSound(){
			return $this->sound;
		}
	}

	class Cat extends Animal {
		Private $reaction;

		public function __construct($r){
			$this->reaction = $r;
		}

		public function makeSound(){
			return $this->reaction;
		}
	}

	echo "<br>";
	$Dog = new Dog("Woof!");
	echo "The Dog Sound : {$Dog->makeSound()}";

	echo "<br>";
	$Cat = new Cat("Meow");
	echo "The Cat Sound : {$Cat->makeSound()}";

	echo "<br>";
	echo "---------------------------------------------------------------------------------";
	////////////////////////////////////////////////////////////////////////////////////////////////


	abstract class Employee{
		public $name;
		public $baseSalary;

		abstract public function calculateSalary();
	}

	class Manager extends Employee{

		public function __construct(string $n, int $bs){
			$this->name = $n;
			$this->baseSalary = $bs;
		}

		public function calculateSalary(){
			return "Manager__ : ".$this->name ." Salary : ". ($this->baseSalary+5000) ."TK";
		}
	}

	class Developer extends Employee{

		public function __construct(string $n, int $bs){
			$this->name = $n;
			$this->baseSalary = $bs;
		}

		public function calculateSalary(){
			$total_salary = $this->baseSalary + 2000;
			return "Developer__ : {$this->name} and his Salary : {$total_salary} TK";
		}
	}

	echo "<br>";
	$Manager = new Manager("Mostufa", 70000);
	echo $Manager->calculateSalary();
	echo "<br>";

	$Developer = new Developer("Ahsan", 50000);
	echo $Developer->calculateSalary();

?>