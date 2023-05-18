<?php

require_once 'apstractVehicle.php';
require_once 'driveInterface.php';

class AbCar extends AbstractVehicle implements DriveInterface
{

    public $doors = 4;
    public $passengerCapacity = 5;
    public $steeringWheel = true;
    public $transmission = 'Manual';

    private $hasKeyinIgnition = true;

    public function start()
    {
        if ($this->hasKeyinIgnition) {
            $this->engineStatus = true;
        }
    }
    public function changeSpeed($speed)
    {
        echo "The car has been accelerated to ". $speed. " kph.<br> ";
    }
    public function changeGear($gear)
    {
        echo "Shifted to gear number ". $gear."<br>";
    }

    public function applyBreak()
    {
        echo "All the 4 breaks in the wheels applied. ". "<br>";
    }


}
$car = new AbCar('Honda', 'Civic', 'Red', 4, '23CJ4567');
$car->start();
echo "The car is " . ($car->getEngineStatus()?'running':'stopped') . "<br>";
$car->stop();
echo "The car is " . ($car->getEngineStatus()?'running':'stopped') . "<br>";
$car->changeSpeed(65);
$car->applyBreak();
$car->changeGear(4);
$car->changeSpeed(75);
$car->applyBreak();



?>