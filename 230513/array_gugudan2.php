<?php
for($i = 0; $i<9; $i++){
    $a[$i] = $i + 1;
    $b[$i] = $i + 1;
}
echo "<br>";
echo "<br>-----------<br>";
for($i=0; $i<9; $i++){
    for ($j=0; $j < 9; $j++) { 
        $c = $a[$i] * $b[$j];
        echo "$a[$i] x $b[$j] = $c<br>";
    }
    echo "-----------<br>";
}


?>