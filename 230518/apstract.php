<?php

abstract class ClassName{
    abstract function methodName($param1);
    
    function anotherMethod(){
        echo "hi";
    }
    
    }
    
    class MyChildClass extends ClassName{
        function methodName($param1)
        {
            echo "$param1 <br>";
        }
        }
    class MyBoyClass extends ClassName{
        function methodName($param1){
            parent::anotherMethod();
        }
    }
    $myChild = new MyChildClass();
    $myChild -> methodName('hello');
    $myChild -> anotherMethod();
    $myboy = new MyBoyClass();
    $myboy-> methodName('h3');
?>