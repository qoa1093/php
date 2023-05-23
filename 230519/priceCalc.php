<?php

require_once 'apstractCar.php';
require_once 'apstractMotorcycle.php';
require_once 'apstractVehicle.php';


$motorcycle1 = new Motorcycle('Kawasaki', 'Ninja', 'Orange3', 2, '53WVC14598');
$motorcycle1->setPrice(3500);
$car1 = new AbCar('Honda', 'Civic', 'Red1', 4, '23CJ4567');
$car1->setPrice(400000);
$motorcycle2 = new Motorcycle('Kawasaki', 'Ninja', 'Orange2', 2, '53WVC14598');
$motorcycle2->setPrice(3900);
$car2 = new AbCar('Honda', 'Civic', 'Red2', 4, '23CJ4567');
$car2->setPrice(410000);
$motorcycle3 = new Motorcycle('Kawasaki', 'Ninja', 'Orange1', 2, '53WVC14598');
$motorcycle3->setPrice(3700);
$car3 = new AbCar('Honda', 'Civic', 'Red3', 4, '23CJ4567');
$car3->setPrice(420000);
$vehicleList = [$car1, $car2, $car3,$motorcycle1,$motorcycle2,$motorcycle3 ];

foreach ($vehicleList as $vehicle) {
    echo ("Vehicle Name :".$vehicle->getMake() ."  vehicle price : ".$vehicle->getPrice()."<br>");
    echo ("args number : 2 " . $vehicle->add(1, 2) . "<br>"); //outputs '3'
    echo ("args type - float " . $vehicle->add(10.5, 2.5) . "<br>"); //outputs '13'
    echo ("args number : 3 " . $vehicle->add(10.5, 2.5, 9.6, 55.2) . "<br>");
}

?>