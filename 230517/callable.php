<?php
$a = 15;
$callable = function() use ($a) { //use : 무명함수가 컴파일 될때의 변수를 use가 갖고있음
    return $a;
};

$a = 'different'; //use는 무명함수가 정의되는 순간을 기준으로 실행되기 때문에.
echo $callable();//변수함수라서 ()필요
echo '<br>';

$a = 15;
$callable = function() use (&$a) { //참조값을 사용하면 주소가 저장되어서 변화값을 사용할 수 있음
return $a;
};
$a = 'different';
echo $callable(); // outputs 'different'
// newline for readability
echo '<br>';





?>