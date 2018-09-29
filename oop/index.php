<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Object Oriented</title>
</head>
<body>

<?php
/*class Car {
    var $beam = 0;
    function moveWheels() {
        echo 'Brummmmm';
    }
}

$setra = new Car();
echo $setra->moveWheels() . '<br>';
echo 'The beam is ' . $setra->beam;*/


// Using $this
/*class Car {
    var $wheels = 4;
    var $doors = 20;

    function moveWheels() {
        $this->wheels = 20;
    }
}*/

//$bmw = new Car();
//$bmw->moveWheels();
//echo $bmw->wheels;

// Inheritance
/*class Plane extends Car {
    function doors() {
        $this->doors = 50;
    }
}

$boeing = new Plane();
$boeing->moveWheels();
//echo $boeing->wheels;

$boeing->doors();
echo $boeing->doors . '<br>';
$boeing->doors = 100;
echo $boeing->doors . '<br>';*/


// Constructor
/*class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function __construct() {
        echo $this->wheels = 50;
    }
}

$bmw = new Car();*/


// Data Access
/*class Car {
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;

    function moveWheels() {
        $this->wheels = 20;
        echo $this->engine = 20;
    }
}

$bmw = new Car();
//$bmw->showProps();

class Semi extends car{
    function showProps() {
        echo $this->hood;
    }
}

$semi = new Semi();
//$semi->showProps();
$semi->moveWheels();*/


// Static
class Car {
    static $wheels = 4;
    var $hood = 1;

    public static function moveWheels() {
        Car::$wheels = 20;
    }
}
Car::moveWheels();
echo Car::$wheels;



?>

</body>
</html>