<?php
interface A 
{
    function a();
}
     
interface B 
{
    function b();
}
interface C extends A, B 
{
    function c();
}

abstract class D implements C 
{
    function a(){ echo "A";}
    function b(){ echo "B";}
   
}
class E extends D 
{
    function c(){ echo "C";}
}
$e= new E();
$e->a();
$e->b();
$e->c();

?>