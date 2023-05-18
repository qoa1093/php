<?php

class Student
{
	public $name;
	public $birthDay;
	public $livingPlace;

	function __construct($name, $birthDay, $livingPlace){
		$this->name = $name;
		$this->birthDay = $birthDay;
		$this->livingPlace = $livingPlace;
	
	}
}
	$date = new DateTime();
	$students = array(14);
	$students[0] = new Student("김시후",$date->format('1996-3-20'), "운천동");
	$students[1] = new Student("김예은", $date->format('1996-12-2'), "내수동");
	$students[2] = new Student("노채은", $date->format('1993-8-16'), "율량동");
	$students[3] = new Student("문종경", $date->format('2000-11-15'), "사천동");
	$students[4] = new Student("박선영", $date->format('1995-11-28'), "문암동");
	$students[5] = new Student("이요한", $date->format('1990-7-3'), "분평동");
	$students[6] = new Student("장석희", $date->format('1998-5-18'), "용정동");
	$students[7] = new Student("최아름", $date->format('1992-10-16'), "증평동");
	$students[8] = new Student("함현석", $date->format('1995-9-3'), "금천동");
	$students[9] = new Student("정영은", $date->format('1995-5-7'), "내수읍");
	$students[10] = new Student("서새롬", $date->format('1993-12-15'), "용암동");
	$students[11] = new Student("김생일", $date->format('1996-4-27'), "상당동");
	$students[12] = new Student("최용권", $date->format('1999-5-18'), "증평읍");
	$students[13] = new Student("최다운", $date->format('1996-5-18'), "증평읍");
	
	
	$today = new DateTime();
	$today = $today->format('m-d');
	echo "오늘은 ".$today."일 입니다.";
	echo "<br>";
	foreach ($students as $student) {
		$bd = new DateTime($student->birthDay);
		$last = $bd->format('m-d');
		if($today === ($last)){
			echo $student->name . "님 생일 축하합니다!<br>";
		}
	}
?>


	
	


