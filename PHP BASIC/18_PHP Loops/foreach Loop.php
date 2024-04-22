<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach Loop</title>
</head>
<body>
    <h1>PHP foreach Loop</h1>
    <p>The foreach loop - Loops through a block of code for each element in an array or each property in an object.</p>
    <span>Loop through the items of an indexed array:</span><br><br>
        <?php
            $book = array("politics","history","economics","culturer","freedomfighter");
            foreach ( $book as $x){
                echo $x.'<br>';
            }
        ?>
    <br>
    <h3>Keys and Values</h3>
    <p>Print both the key and the value from the $student array:</p>
        <?php
            $student = array("101"=>"Raju","102"=>"Rakib","103"=>"Jakir","104"=>"Mamun","105"=>"Shakil");
            foreach($student as $a=>$b){
                echo "$a : $b <br>";
            }
        ?>
    <br>
    <h3>The foreach Loop on Objects</h3>
    <p>Print the property names and values of the $student object:</p>
            <?php
                class student{
                    public $Roll;
                    public $Name;
                    public $Department;
                    public function __construct($Roll,$Name,$Department){
                        $this->Roll       = $Roll;
                        $this->Name       = $Name;
                        $this->Department = $Department;

                    }
                }
                $mystudent = new student("201","Shahriar Rahman Shakil","WDPF");
                foreach($mystudent as $a => $b){
                    echo "$a : $b <br>";
                }

            ?>
    <br>
    <h3>The break Statement</h3>
    <p>Stop the loop if $x is "HRM":</p>
            <?php
                $college = array("Accounting","Management","Finance and Banking","HRM","ICT");
                foreach($college as $x){
                    if($x == "HRM")break;
                    echo $x . "<br>";
                }

            ?>
    <br>
    <h3>The continue Statement</h3>
    <p>Stop, and jump to the next iteration if $x is "HRM":</p>
             <?php
                $college = array("Accounting","Management","Finance and Banking","HRM","ICT");
                foreach($college as $x){
                    if($x == "HRM")continue;
                    echo $x . "<br>";
                }

            ?>
    <h3>Foreach Byref</h3>
    <p>By default, changing an array item will not affect the original array:</p>
            <?php
                $colors = array("white","Black","red","green","Blue","Yellow");
                foreach($colors as &$x){
                    if($x == "red") $x = "Pink";
                }
                var_dump($colors);
            ?>
    <br>
    <h2>Alternative Syntax</h2>
    <p>Loop through the items of an indexed array:</p>
            <?php
            $colors = array("white","Black","red","green","Blue","Yellow");
            foreach($colors as $z):
                echo $z."<br>";
            endforeach;
            ?>
</body>
</html>