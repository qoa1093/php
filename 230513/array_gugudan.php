<?php

for($i = 0; $i<8; $i++){
    $a[$i] = $i + 2;
    echo $a[$i]." ";

}
echo "<br>";

for ($j=0; $j < 9; $j++) { 
    $b[$j] = $j + 1;
    echo $b[$j]." ";
}

echo "<br>-----------<br>";

for ($j=0; $j < 9; $j++) { 
    $c = $a[0]* $b[$j];
    echo "$a[0] x $b[$j] = $c<br>";
}
echo "-----------<br>";

for ($j=0; $j < 9; $j++) { 
    $c = $a[4]* $b[$j];
    echo "$a[4] x $b[$j] = $c<br>";
}
echo "-----------<br>";

?>