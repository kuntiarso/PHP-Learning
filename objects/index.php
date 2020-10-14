<?php 

    class Car {
        public $color;
        public $model;

        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }

        public function message() {
            return "My new car is a " . $this->color . " " . $this->model . "."; 
        }

        public function color() {
            return $this->color; 
        }

        public function model() {
            return $this->model; 
        }
    }

    $myCar = new Car("white", "Lexus");
    $myCar2 = new Car("grey", "Ford");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Objects</title>
</head>
<body>
    
    <h1>Learning objects and classes in PHP.</h1>
    <p><?php echo $myCar ->message() ?></p>
    <p><?php echo $myCar2 ->message() ?></p>
    <hr>
    <p>My new car is a <span style="color:darkGreen;"><?php echo $myCar->color . " " . $myCar->model; ?></span>.</p>
    <p>My new car is a <span style="color:darkRed;"><?php echo $myCar2->color . " " . $myCar2->model; ?></span>.</p>

</body>
</html>