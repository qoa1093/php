<?php
declare(strict_types = 1);
function number(int $int)
{
    echo "the number is: $int".'<br>';
}
//타입이 안맞으면 실행이안됨. -> 형변환을 해줘야 함
number((int)'1');
//형변환
$x = "13.3333";
var_dump($x); // 변수의 형을 보기 위한 함수
echo "<br>";
$y = (float) $x;
var_dump($y);
echo('<br>');

//boolean
echo '<h3>Boolean to Int</h3>';
$trueValueBool = true;
$falseValueBool = false;
echo '<h3>Before type conversion:</h3>';
var_dump($trueValueBool);
echo '<br>';
var_dump($falseValueBool);

//정수형으로? -> 0과 1로 나누어짐
echo '<h3>After type conversion:</h3>';
$trueValueInt = (int) ($trueValueBool);
$falseValueInt = (int) ($falseValueBool);
var_dump($trueValueInt);
echo '<br>';
var_dump($falseValueInt);

?>