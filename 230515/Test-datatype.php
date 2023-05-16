<?php 

$data = 3.5;
switch (gettype($data)) {//데이터 타입을 리턴하는 함수
   case 'integer':
   case 'double':
   case 'float':
    echo "The data type is Number.";
    break;
   case 'boolean':
    echo "The data type is Boolean";
    break;
   case 'string':
    echo "The data type is String";
    break;
   case 'array':
    echo "The data type is Array";
    break;
   default:
    echo "The data type is unknown";
    break;
}
?>