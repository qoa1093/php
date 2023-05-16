<?php
//연관 배열
$heroInfo = array(
    'name' => 'peter parker',// 키값을 지정할 수 있음
    'superheroName' => 'spiderman',
    'city' => 'new york',
    'creator' => 'stan lee'
);
echo '<pre>'; // prin_f 브라우저에서도 보일 수 있게
print_r($heroInfo); // 출력하는 함수
echo '</pre>';
echo $heroInfo['name']; // 연관 배열 항목 접근 : 키 이름을 넣어주면 배열의 요소값이 출력
echo"<br>";

//배열 인덱스 키 생성
$people = [];
$people[] = 'David Carr';
$people[] = 'Dan Sherwood';
$people[] = 'Jack Batty';
$people[] = 'James Powell';
$people[] = 'Kerry Owston';
$people[] = 'Ruby Keable';

echo '<pre>';
print_r($people);
echo '</pre>';

//배열이름 키 생성
$people = [];
$people['Rose'] = 'Principal Software Architect';
$people['Laura'] = 'Senior Software Architect';
$people['Jane'] = 'Project Manager';
$people['Mary'] = 'Software Architect';

echo '<pre>';
print_r($people);
echo '</pre>';

//배열 항목 추가
//1.
$animals = ['Lion', 'Cat', 'Dog'];
$animals[] = 'Wolf';
echo '<pre>';
print_r($animals);
echo '</pre>'; 

//2.
$heroInfo['publisher'] = 'Marvel Comics';
    echo '<pre>';
    print_r($heroInfo);
    echo '</pre>';

//3. push
array_push($animals, 'tiger');
echo '<pre>';
print_r($animals);
echo '</pre>';


//배열 항목 삭제
//1. pop
$stack = array("black", "red", "green", "purple");
$fruit = array_pop($stack); //맨 마지막 요소를 삭제
echo '<pre>';
print_r($stack);
echo '</pre>';

//2. unset
$stack = array("black", "red", "green", "purple");
unset($stack[1]);
echo '<pre>';
print_r($stack);
echo '</pre>';

?>