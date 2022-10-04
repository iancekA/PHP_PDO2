<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);
echo nl2br("\n");

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
echo nl2br("\n");

$truck = new Truck('green', 4, 'electric',25);
echo $truck->forward();
echo $truck->isFilled();
var_dump($truck);
echo $truck->isFilled();

$truck2 = new Truck('black', 4, 'electric',75);
echo $truck2->forward();
echo $truck2->isFilled();
var_dump($truck2);
echo $truck2->isFilled();