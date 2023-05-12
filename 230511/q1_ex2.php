<?php

$month = 12;

if($month>=3 && $month<=5){
    $season = '봄';
    echo "{$month}월은 {$season}입니다.";
}
elseif($month>=6 && $month<=8){
    $season = '여름';
    echo "{$month}월은 {$season}입니다.";
}
elseif($month>=9 && $month<=11){
    $season = '가을';
    echo "{$month}월은 {$season}입니다.";
}elseif($month== 12|| $month==1 || $month == 2){
    $season = '겨울';
    echo "{$month}월은 {$season}입니다.";
}else{
    echo "잘못입력되었습니다.";
}

echo "<br><br>";
$month = 12;
switch($month){
    case (3<=$month && $month<=5):
        echo "{$month}월은 봄입니다.";
        break;
    case 6:
    case 7:
    case 8:
        $season = '여름';
        echo "{$month}월은 {$season}입니다.";
        break;
    case 9:
    case 10:
    case 11:
        $season = '가을';
        echo "{$month}월은 {$season}입니다.";
        break;
    case 12:
    case 1:
    case 2:
        $season = '겨울';
        echo "{$month}월은 {$season}입니다.";
        break;
    default:
        echo "{$month}월은 잘못된 달입니다.";
        break;

}

?>