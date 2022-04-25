<?php

require_once 'electricCar.php';
require_once 'electricBike.php';
require_once 'skateboard.php';

$electricCar = new ElectricCar();
var_dump($electricCar);

$electricBike = new ElectricBike(15);
var_dump($electricBike);

$skateboard = new Skateboard();
