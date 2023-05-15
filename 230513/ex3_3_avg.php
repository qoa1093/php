<?php

$subject = array("파이썬","php","자바스크립트","사진","영화감상");
$name = array("김**","이**","정**","장**","황**","이**","최**","함**","도**","강**");

$score = array(array(88,87,89,80,84,85,88,65,55,90),
    array(88,87,89,80,84,85,88,65,55,90),
    array(88,87,89,80,84,85,88,65,55,90),
    array(88,87,89,80,84,85,88,65,55,90),
    array(88,87,89,80,84,85,88,65,55,90));

    for($i=0;$i<5;$i++){
        $sum = 0;
        for($j=0;$j<10;$j++){
            $sum += $score[$i][$j];
        }
        $avg = $sum /10;
        echo "{$subject[$i]}의 합계 : $sum, 평균 : $avg<br>";
    }


    for($i=0;$i<10;$i++){
        $sum = 0;
        for($j=0;$j<5;$j++){
            $sum = $sum + $score[$j][$i];
            //$sum += $score[$i][$j];
        }
        $avg = $sum /5;//count($subject)
        echo "{$name[$i]}의 합계 : $sum, 평균 : $avg<br>";
    }

?>