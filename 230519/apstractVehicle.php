<?php

abstract class AbstractVehicle
{
    public $make;
    public $model;
    public $color;
    protected $wheels;
    private $engineNumber;
    public static $counter = 0;
    protected $engineStatus = false;
    protected $price;
    //생성자 넣기
    function __construct($make = 'DefaultMake',$model = 'DefaultModel',
                          $color='DefaultColor',$wheels = 4,
                          $engineNumber='DefaultEngineNumber'){
        $this->make = $make;
        $this-> model = $model;
        $this-> wheels = $wheels;  
        $this-> color = $color;
        $this-> engineNumber =$engineNumber;
        self::$counter++;

     }
    function stop()
    {
    $this->engineStatus = false;
     }
     function getEngineStatus()
     {
    return $this->engineStatus;
     }

     function getPrice()
    {
    return $this->price;
    }
    function getMake()
    {
    return $this->make;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }
    function add() {
        $sum = 0;
        $args = func_get_args();
        foreach ($args as $arg)
           $sum += $arg;
        return $sum;
    }

}



?>