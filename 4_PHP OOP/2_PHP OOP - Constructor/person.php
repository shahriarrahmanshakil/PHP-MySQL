<?php
    class person {
        public $name;
        public $age;
        public $sex;

        function show(){
            echo "Name :".$this->name.'<br>'."Age :".$this->age.'<br>'."Sex :".$this->sex;
        }
    }
    $person1 = new person();
    $person1->name = "Shahriar Rahman Shakil";
    $person1->age = 27;
    $person1->sex = "Male";
    $person1->show();

    echo "<br>";
    echo "<br>";

    $person2 = new person();
    $person2->name = "Rafia Kabir Khan";
    $person2->age = 29;
    $person2->sex = "Female";
    $person2->show();
?>

<?php echo "<br>"; ?>
<?php echo "<br>"; ?>
<?php echo "<h1><u>Using Constructor Method</u></h1>"; ?>
<?php echo "<br>"; ?>

<?php
//added constructor method
    class anotherPerson {
        public $name;
        public $address;

        function __construct($nam="abc",$add='xyz'){
            $this->name = $nam;
            $this->address = $add;
        }

        function shows(){
            echo "Name : ".$this->name."<br>"."Address : ".$this->address;
        }
    }
    $person4 = new anotherPerson('Rakibul Islam','Malibag,Dhaka');
    $person4->shows();

    echo "<br>";
    echo "<br>";

    $person5 = new anotherPerson('Raihan Molla Raju','Lalbag,Dhaka');
    $person5->shows();
?>