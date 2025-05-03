<?php 
	#php oop Abstract Class
	
	abstract class car {
		public $name;

		public function __construct($n){
			$this->name = $n;
		}

		abstract function intro():string;
	}

	class Audi extends car {
		public function intro():string{
			return "Choose German Quality that's why I am select $this->name";
		}
	}

	class Volvo extends car {
		public function intro():string{
			return "Proud to be a swedish that's I am choose $this->name";
		}
	}

	class citroen extends car {
		public function intro():string{
			return "French veghange with extra love $this->name";
		}
	}

	$audi = new Audi("Audi");
	echo $audi->intro();

	echo "<br>";

	$volvo = new Volvo("Volvo");
	echo $volvo->intro();

	echo "<br>";

	$citroen = new citroen("citroen");
	echo $citroen->intro();

?>