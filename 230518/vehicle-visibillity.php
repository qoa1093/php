<?php
require_once 'Vehicle1.php';
$vehicle = new Vehicle();
echo "Make: " . $vehicle->make . "<br>";
echo "Model: " . $vehicle->model . "<br>";
echo "Color: " . $vehicle->color . "<br>";
echo "No of wheels: " . $vehicle->getNoOfWheels() . "<br>";
echo "Engine No: " . $vehicle->getEngineNumber() . "<br>";


?>