<?php

require_once 'apstractVehicle.php';


class AbCar extends AbstractVehicle 
{

    public $doors = 4;
    public $passengerCapacity = 5;
    public $steeringWheel = true;
    public $transmission = 'Manual';

    private $hasKeyinIgnition = true;




}



?>