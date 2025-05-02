<?php
    class Fruit{
    	public $name;
    	protected $color;
    	private $weight;
	}
	$mango = new Fruit();
	echo $mango->name = "Painapel";
	// $mango->color = "Red"; #can not access protected property
	// $mango->color = "500 gm"; #can not access private property

	class Book{
		public $name;
		public $department;
		public $pages;

		public function set_name($n){
			$this->name = $n;
		}

		protected function set_department($d){
			$this->department = $d;
		}

		private function set_pages($w){
			$this->weight = $w;
		}

		public function get_name(){
			return $this->name;
		}
	}

	$mojibAutoBio = new Book();
	$mojibAutoBio->set_name("Unfinished Memories");
	// $mojibAutoBio->set_department("Politics"); #can not access protected function outside the class
	// $mojibAutoBio->set_pages("350"); #can not access private function outside the class
	echo "<br>";
	echo $mojibAutoBio->get_name();
	
?>