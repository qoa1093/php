<?php

class MySimpleClass1
{
    public static $myStaticProperty = 'I am a parent static property. <br>';
    public static function myStaticMethod()
    {
        return self::$myStaticProperty .'I am a parent static method. <br>';
    }
    public static function myAnotherStaticMethod()
    {
        echo self::myStaticMethod();
    }

}
class MySubClass extends MySimpleClass1
{
    public static function printSomething()
    {
            echo parent::myStaticMethod();
    }
}
    echo MySubClass::printSomething();
        
    echo MySimpleClass1::$myStaticProperty; //prints 'I am a parent static property.'
    echo MySimpleClass1::myStaticMethod(); //prints 'I am a parent static method.'
    echo MySimpleClass1::myAnotherStaticMethod();
    $object = new MySubClass();
    echo $object->printSomething();
    
    



?>