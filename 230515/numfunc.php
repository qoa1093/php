<?php
//중첩된 foreach  반복문
$basket = [
    ["Mango", "Apple", "Banana", "Orange"],
    ["Burger", "Fries", "Sandwich", "Brownie", "Soda"]
    ];
    for ($i = 0; $i < count($basket); $i++) {
        for ($j = 0; $j < count($basket [$i]); $j++) {
            echo $basket[$i][$j]. "<br>";
        }
    }
    
    echo "<br>";

$basketItems = [
    ["Mango", "Apple", "Banana", "Orange"],
    ["Burger", "Fries", "Sandwich", "Brownie", "Soda"]
];
    foreach ($basketItems as $foodItems) {
    foreach ($foodItems as $food) {
    echo $food . " ";
    }
    echo "<br>";
    }
    

?>