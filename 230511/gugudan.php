<h2>구구단 표 </h2>

<table border = "1" witdh="100">

<?php

$a=2;
while($a <= 9 ){
    $b=1;
    echo "<tr>"; // 행
    while($b <=9){
        $c = $a * $b;
        echo "<td align='center'> $a x $b = $c </td>";//셀
        $b++;
    }
    echo "</tr>";
    //echo "<br>";
    $a++;
}
?>

</table>