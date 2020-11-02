<?php

require_once  'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$car = new Car('green', 4, 'electric');

try {
    $car->start();
} catch (Exception $e) {
    echo "Exception received  : ". $e->getMessage() . "<br>";
    $car->setParkBrake(false);
} finally{
    echo "ma voiture roule comme un donut!";
}