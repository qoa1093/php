<?php

echo "<table border=1>";
echo "<tr align=center>";
echo "<th width=100>2</th>";
echo "<th width=100>3</th>";
echo "<th width=100>4</th>";
echo "<th width=100>5</th>";
echo "<th width=100>6</th>";
echo "<th width=100>7</th>";
echo "<th width=100>8</th>";
echo "<th width=100>9</th>";
echo "</tr>";

for ($i=0; $i <= 7; $i++) { 
    for ($j=0; $j <= 8; $j++) { 
        $result[$i][$j] = ($i+2) * ($j+1);
    }
}
    for ($j=0; $j <= 8; $j++) { 
        echo "<tr align=center>";
        for ($i=0; $i <= 7; $i++) { 
            $a = $i+2;
            $b = $j+1;
            $c = $result[$i][$j];
            echo "<td> $a x $b = $c </td>";
        }
        echo"</tr>";
    }
    echo "</table>";
?>