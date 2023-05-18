<?php

class Vehicle
{
   public $make;
   public $model;
   public $color;
   public $wheels;
   public $engineNumber;
     function __construct($make = 'DefaultMake',$model = 'DefaultModel',
                          $color='DefaultColor',$wheels = 4,
                          $engineNumber='DefaultEngineNumber'){
        $this->make = $make;
        $this-> model = $model;
        $this-> wheels = $wheels;  
        $this-> color = $color;
        $this-> engineNumber =$engineNumber;
     }
}



?>