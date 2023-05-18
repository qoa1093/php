<?php
require_once 'apstractVehicle.php';
require_once 'driveInterface.php';

class Motorcycle extends AbstractVehicle implements DriveInterface

{
public $noOfWheels = 2;
public $stroke = 4;
private $hasKey = true;
private $hasKicked = true;

public function start()
{
    if($this->hasKey && $this->hasKicked)
    {
        $this->engineStatus = true;
    }
}

public function changeSpeed($speed)
{
    echo "The cycle has been accelerated to ". $speed. " kph.<br> ";
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

$motorcycle = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2, '53WVC14598');
$motorcycle->start();
echo "The motorcycle is " . ($motorcycle->getEngineStatus()?'running': 'stopped') . "<br>";
$motorcycle->stop();
echo "The motorcycle is " . ($motorcycle->getEngineStatus()?'running': 'stopped') . "<br>";


$motorcycle->changeSpeed(65);
$motorcycle->applyBreak();
$motorcycle->changeGear(4);
$motorcycle->changeSpeed(75);
$motorcycle->applyBreak();

?>