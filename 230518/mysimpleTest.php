<?php

require_once 'mysimpleclass.php';

$object = new MySimpleClass();

echo ("public:".$object->publicAttribute." ");
//$object->protectedMember;
//$object->privateAttribute;


?>