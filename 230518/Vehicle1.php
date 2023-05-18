<?php

class Vehicle
{
   public $make;
   public $model;
   public $color;
   protected $wheels;
   private $engineNumber;
   public static $counter = 0;

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
     function getMake(){
      return $this->make;
     }
     function getModel(){
      return $this->model;
     }
     function getColor(){
      return $this->color;
     }
     function getNoOfWheels(){
      return $this->wheels;
     }
     function getEngineNumber(){
      return $this->engineNumber;
     }
}



?>