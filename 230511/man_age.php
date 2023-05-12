<?php
$now_year = 2023;
$now_month = 5;
$now_day = 11;

$birth_year= 1993;
$birth_month = 8;
$birth_day= 16;

if($birth_month<$now_month)
 $age = $now_year - $birth_year;
else if($birth_month == $now_month){
    if($birth_day <= $now_day)
        $age=$now_year - $birth_year;
    else    
        $age = $now_year - $birth_year - 1;
}
else
    $age = $now_year - $birth_year - 1;

    echo "오늘 날짜 : $now_year 년 $now_month 월 $now_day 일<br>";           
    echo "출생 연월일 : $birth_year 년 $birth_month 월 $birth_day 일생<br>";           
    echo "만 나이 : $age 세";
?>