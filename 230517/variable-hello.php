<?php
declare(strict_types=1);
$greeting = function(string $name): void
{
echo 'Hello ' . $name;
};

$greeting('Susan');
echo '<br>';
?>