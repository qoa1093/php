<?php
require_once 'Vehicle1.php';
//$vehicle = new Vehicle();
$vehicle = new Vehicle('Honda', 'Civic', 'Red', 4, '23CJ4567');
echo "Make: " . $vehicle->make . "<br>";
echo "Model: " . $vehicle->model . "<br>";
echo "Color: " . $vehicle->color . "<br>";
echo "No of wheels: " . $vehicle->wheels . "<br>";
echo "Engine No: " . $vehicle->engineNumber . "<br>";

/*echo "Make: " . $vehicle1->getMake() . "<br>";
echo "Model: " . $vehicle1->getModel() . "<br>";
echo "Color: " . $vehicle1->getColor() . "<br>";
echo "No of wheels: " . $vehicle1->getNoOfWheels() . "<br>";
echo "Engine No: " . $vehicle1->getEngineNumber() . "<br>";*/
?>