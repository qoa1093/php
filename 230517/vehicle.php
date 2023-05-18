<?php

class Vehicle
{
   public $make = 'DefaultMake';
   public $model = 'DefaultModel';
   public $color = 'DefaultColor';
   public $noOfWheels = 0;
   public $engineNumber = 'XXXXXXXX';

function getMake()
{
   return $this->make;
}
function getModel()
{
   return $this->model;
}
function getColor()
{
   return $this->color;
}

function getNoOfWheels(){
    return $this->noOfWheels;
}
function getEngineNumber(){
    return $this->engineNumber;
}

function setMake($make)
{
   $this->make = $make;
}

function setModel($model)
{
   $this->model = $model;
}

function setColor($color)
{
    $this->color = $color;
}
function setNoOfWheels($wheels)
{
    $this->noOfWheels = $wheels;
}
function setEngineNumber($engineNumber){
    $this-> engineNumber = $engineNumber;
}
}
    $object = new Vehicle();
    $object->setMake('Honda');
    $object->setModel('Civic');
    $object->setColor('Red');
    $object->setNoOfWheels(4);
    $object->setEngineNumber('ABC123456');
    echo "Make : " . $object->getMake() . "<br>";
    echo "Model : " . $object->getModel() . "<br>";
    echo "Color : " . $object->getColor() . "<br>";
    echo "No. of wheels : " . $object->getNoOfWheels() . "<br>";
    echo "Engine no. : " . $object->getEngineNumber() . "<br>";
    echo "<br>";
//3개의 객체를 만들어서 객체를 갖는 배열을 만들어서 foreach문으로 나열하기
    $object1 = new Vehicle();
    $object1->setMake('기아');
    $object1->setModel('스포티지');
    $object1->setColor('Red');
    $object1->setNoOfWheels(4);
    $object1->setEngineNumber('ABC123454');

    $object2 = new Vehicle();
    $object2->setMake('현대');
    $object2->setModel('카니발');
    $object2->setColor('black');
    $object2->setNoOfWheels(4);
    $object2->setEngineNumber('ABC123459');

    $obj = array($object,$object1,$object2);

    foreach( $obj as $ob){
        echo "Make : " . $ob->getMake() . "<br>".
             "Model : " . $ob->getModel() . "<br>".
             "Color : " . $ob->getColor() . "<br>".
             "No. of wheels : " . $ob->getNoOfWheels() . "<br>".
             "Engine no. : " . $ob->getEngineNumber() . "<br>".
             "<br>";
    };
    //연관배열
    $obj = array('Honda'=>$object,'기아'=>$object1,'현대'=>$object2);

    foreach( $obj as $key => $ob){
        echo $key . "<br> ";
        echo            $ob->getMake() . " ".
                        $ob->getModel() . " ".
                        $ob->getColor() . " ".
                        $ob->getNoOfWheels() . " ".
                        $ob->getEngineNumber() . " "."<br>";
       // "Make : " . $ob->getMake() . "<br>".
         //    "Model : " . $ob->getModel() . "<br>".
           //  "Color : " . $ob->getColor() . "<br>".
             //"No. of wheels : " . $ob->getNoOfWheels() . "<br>".
             //"Engine no. : " . $ob->getEngineNumber() . "<br>".
             //"<br>";
    };


?>