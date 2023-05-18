<?php
class Person
{
public $name = 'John Doe';
function sayHello()
{
echo 'Hello!';
}
}

$person = new Person();

$person -> sayHello();
echo $person->name;


?>