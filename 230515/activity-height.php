<?php

$name = $_GET['name'];
$centimeter = $_GET['centimeter'];
$meter = $_GET['meter'];

$height = $meter + $centimeter /100;

echo "이름 = $name 키 = {$height}m ";

?>