<?php
require_once 'student1.php';
$timezone = date_default_timezone_get();
//echo "The current server timezone is: " . $timezone ."<br>";
date_default_timezone_set('Asia/Seoul');

$students = [];       
$students[] = new Student("김시후", date('1996/3/20'), "운천동");
$students[] = new Student("김예은", date('1996/12/2'), "내수동");
$students[] = new Student("노채은", date('1993/8/16'), "율랼동");
$students[] = new Student("문종경", date('2000/11/15'), "사천동");
$students[] = new Student("박선영", date('1995/11/28'), "문암동");
$students[] = new Student("이요한", date('1990/7/3'), "분평동");
$students[] = new Student("장석희", date('1998/7/3'), "용정동");
$students[] = new Student("최아름", date('1992/10/16'), "증평동");
$students[] = new Student("함현석", date('1995/9/3'), "금천동");
$students[] = new Student("정영은", date('1995/5/7'), "내수읍");
$students[] = new Student("서새롬", date('1993/12/15'), "용암동");
$students[] = new Student("김생일", date('1996/4/27'), "상당동");
$students[] = new Student("최용권", date('1996/5/18'), "증평읍");
$students[] = new Student("최다운", date('1996/4/28'), "증평읍");

foreach ($students as $pupil) {
  if ($pupil->is_birthday()) {
    echo '생일 축하합니다! ' . $pupil->name. ' 씨!!!'; 
  }
}

?>