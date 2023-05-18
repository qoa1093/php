<?php

class MySimpleClass{

    public $propertyName = 'base property';
    function methodName(){
        echo 'i am a base method';
    }
}

class MyNewClass extends MySimpleClass{
    public $addedProperty = 'added property';
    function addedMethodName(){
        parent::methodName();// 부모클래스에 있는 메소드를 불러라.
        echo 'I am an added method. ';

    }

}
$object = new MyNewClass();
$object->propertyName; //holds, 'base property'
$object->methodName(); //prints, 'I am a base method. '
$object->addedProperty; //holds 'added property'
$object->addedMethodName(); //prints 'I am a base method. I am an added method.’


?>