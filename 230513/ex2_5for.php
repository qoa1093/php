<?php 

for($i = 1 ; $i<=10;$i++){
    $sum = 1;
    echo "$i! = ";
    for($k = 1; $k <=$i ; $k++){
        $sum *= $k;       
    }
    echo "$sum";
    echo "<br>";
}


?>