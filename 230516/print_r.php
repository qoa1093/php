<?php
$shapes = [
'circle',
'rectangle',
'triangle'
];
//echo $shapes;
echo '<pre>';
print_r($shapes);
echo '</pre>';

$format = 'You have used the maximum amount of %d credits you are allowed to spend in a %s. You will have to wait %d days before new credits become available.';
//정수형, 문자형, 정수형
printf($format, 1000, 'month', 9);

$fruits = [
    'Pear',
    'orange', // notice orange is all lowercase
    'Apple',
    'Banana',
    ];
    // sort with flags combined with bitwise OR operator
    sort($fruits, SORT_FLAG_CASE | SORT_NATURAL);
    //대소문자 상관없이 자연스러운 알파벳순으로 
    echo '<pre>';
    print_r($fruits);
    Echo '</pre>';
?>