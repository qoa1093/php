<?php

echo "Assignment by value";
echo '<br>';

$animal1 = 'cat';
$animal2 = $animal1;

echo $animal1.' - '.$animal2;
echo'<br>';
$animal2 = 'Dog';
echo $animal1 . ' - ' . $animal2;
echo '<br>';

echo 'Assignment by reference';
echo '<br>';

$animal3 = 'Elephant';
$animal4 = &$animal3;

echo $animal3.' - '.$animal4;
echo'<br>';
$animal4 = 'Giraffe';
echo $animal3 . ' - ' . $animal4;
?>
