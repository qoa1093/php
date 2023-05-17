<?php
// we are in global scope here
$count = 0;
function countMe(){
// we enter function scope here
// $count is pulled from global scope using the keyword global
global $count;
$count++;
}
countMe();
countMe();
echo $count;

echo'<br>';
function createOutOfCreditsWarning(int $maxCredits, string $period, int $waitDays): string
{
    $format = 'You have used the maximum amount of %d credits you are
    allowed to spend in a %s. You will have to wait %d days before
    new credits become available.';
    return sprintf($format, $maxCredits, $period, $waitDays);
    //string을 리턴해주는 함수
}
echo (createOutOfCreditsWarning(1000,'one year',10));


?>
