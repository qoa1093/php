<?php
require_once 'apstractVehicle.php';


class Motorcycle extends AbstractVehicle 

{
public $noOfWheels = 2;
public $stroke = 4;
private $hasKey = true;
private $hasKicked = true;



function getPrice()
    {
    return $this->price - $this->price * 0.05;
    }


}
?>