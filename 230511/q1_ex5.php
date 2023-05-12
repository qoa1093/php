<?php

$sum = 0;

for($i = 1; $i <= 100; $i++){

    if($i % 5 ==0)
    $sum = $sum + $i;
}
echo "1~100의 정수 중 5의 배수의 합계 : $sum";

echo"<br>";

$count = 0;
$ok = true;
for($i = 500; $i <= 700; $i++){

if($i % 4 !=0){
    echo $i." ";
    $count++;
    $ok = true;

}
if($count != 0 && $count % 10 == 0 && $ok == true)
{
    echo "<br>";
    $ok = false;
}
}

?>

<h3>섭씨 -> 화씨 온도변화</h3>
<table border='1' width="300">
    <tr align = 'center'><td width = '150'>섭씨</td><td>화씨</td></tr>
<?php

for ($i= -15; $i  <=35 ; $i = $i+ 5) { 
    $f = $i * 9 / 5 + 32;
    echo "<tr align='center'><td>$i</td><td>$f</td></tr>";
}
?>
</table>