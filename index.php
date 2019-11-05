<?php
require_once 'Bicycle.php';

require_once 'Car.php';

require_once 'Truck.php';

$bigtruck = new Truck('green', 4, 'fuel', 10);

var_dump($bigtruck);

$bigtruck
    ->setEnergy( 'electric')
    ->setCargo(90);
echo $bigtruck->filling();

$bite = new Bicycle('green', 4);
var_dump($bite);