<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object</title>
</head>
<body>
    <?php
        class Car{
            public $color;
            public $model;
            public $engine;

            public function __construct($color,$model,$engine){
                    $this->color  = $color;
                    $this->model  = $model;
                    $this->engine = $engine;
            }
            public function message(){
                return "My Car is Aweosome this is $this->color.''.$this->model.''.$this->engine.''.is supper fast";
            }

        }
        $mycar = new Car("Powder Blue","Suzuki rx-200","vxc567");
        echo $mycar;

    
    ?>
</body>
</html>