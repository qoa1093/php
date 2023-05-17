<?php
   $a = 15;
   $callable = function() use ($a) {
   return $a;
   };

   $a = 'different';
   echo $callable();
   echo '<br>';

   //15  -> 실행 결과

$a = 15;
$callable = function() use (&$a) {
return $a;
};
$a = 'different';
echo $callable(); // outputs 'different'
// newline for readability
echo '<br>';
?>