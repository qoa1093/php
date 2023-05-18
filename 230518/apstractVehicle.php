<?php

abstract class AbstractVehicle
{
    public $make;
    public $model;
    public $color;
    protected $noOfWheels;
    private $engineNumber;
    public static $counter = 0;
    protected $engineStatus = false;

    abstract function start();
    function stop()
    {
    $this->engineStatus = false;
     }
     function getEngineStatus()
     {
    return $this->engineStatus;
     }

}



?>