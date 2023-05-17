<?php


function average()
{
    $count = func_num_args();//내장함수
    $total = 0;
    foreach (func_get_args() as $number) {
        $total += $number;
    }
    return $total / $count;
}

$ave =average(10,20,30);

echo ("\$ave : $ave<br>");

?>