<?php

$score = 90.1;
$score1 = floor($score / 10);

switch($score1){
    /*case ($score>=90 && $score<=100):
        echo "수";*/
        case 0:
        case 1:
            case 2:
                case 3:
                    case 4:
                        case 5:
            echo "가";
            break;
        case 6:
            echo "양";
            break;
        case 7:
            echo "미";
            break;
        case 8:
            echo "우";
            break;
        case 9:
        case 10:
            echo "수";
            break;    
    default:
        echo "잘못 입력하셨습니다.";
        break;
    
    
}


?>