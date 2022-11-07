<?php

require_once 'LightableInterface.php';
require_once './Vehicle.php';
require_once './Car.php';
require_once './Bicycle.php';
require_once './skateboard.php';


$car = new Car(50);
$bike1 = new Bicycle(20);
$bike2 = new Bicycle(4);
$skate = new Skateboard(11);

echo "<br> Car : <br> SwitchOn :";
var_dump($car->switchOn());
echo "SwitchOff :";
var_dump($car->switchOff());

echo "<br> bike1 running at 20 km/h: <br> SwitchOn :";
var_dump($bike1->switchOn());
echo "SwitchOff :";
var_dump($bike1->switchOff());

echo "<br> bike2 running at 4 km/h: <br> SwitchOn :";
var_dump($bike2->switchOn());
echo "SwitchOff :";
var_dump($bike2->switchOff());

echo "<br> skateboard (normaly displying eror: <br> SwitchOn :";
echo $skate->switchOn();
