<?php

function add($param1, $param2): string
{
   if (false === is_numeric($param1)) {
  throw new DomainException('$param1 should be numeric.');
   }

   if (false === is_numeric($param2)) {
  throw new DomainException('$param2 should be numeric.');
   }
   
   $sum = $param1 + $param2;
   //return "The sum of $param1 and $param2 is: $sum";  시간 소모 비용
   return ('The sum of ' .$param1. ' and ' .$param2 . 'is: ' . $sum);

}
   echo add('45',2);
   echo '<br>';

//변수함수
$callable = 'strtolower';
echo $callable('Foo'); // will print foo;
echo '<br>';

//무명함수
function(float $value): int{
    if (0 <= $value) {
    return -1; // this is called an early return
    }
    return 1;
};
echo (function(float $value): int{
    if (0 <= $value) {
       return 1;
    }
    return -1;
})(2.3);
// 막바로 불러와서 쓰기 위하여..?무명함수를 바로 불러와서 사용할 수 있음.  
$result =  function(float $value): int{
    if (0 <= $value) {
       return 1;
    }
    return -1;
};
echo $result(-2.3);         
?>