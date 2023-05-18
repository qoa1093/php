<?php

//생성자 역할 __construct
class MySimpleClass
{
    public $name;
    function __construct($username)
    {
        $this->name = $username;
    } 
    //소멸자 : php에서는 더이상 참조가 없으면 가용공간을 회수함
    function __destruct()
    {
        echo 'The object has been removed.';
    }
    
}

$simpl = new MySimpleClass('MySimpleClass');
echo ($simpl -> name . "<br>");
$simpl1 = new MySimpleClass('MySimpleClass1');
echo ($simpl1 -> name . "<br>");
//unset : php 객체 소멸 함수
//unset($simpl1);
//$simpl1 = null;




?>