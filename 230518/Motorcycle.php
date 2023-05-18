<?php

require_once 'Vehicle1.php';

class Motorcycle extends Vehicle{
    public $noOfwheels = 2;
    public $stroke = 4;
}
$motorcycle = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2, '53WVC14598');
echo "Vehicle Type: " . get_class($motorcycle) . "<br>";
echo " Make: " . $motorcycle->getMake() . "<br>";
echo " Model: " . $motorcycle->model . "<br>"; //get을 쓰는 이유 : private일 경우 가져오기 위해서
echo " Color: " . $motorcycle->color . "<br>";
echo " No of wheels: " . $motorcycle->noOfwheels . "<br>";
echo " No of strokes: " . $motorcycle->stroke . "<br>";
echo " No of wheels of parents: " . $motorcycle->getNoOfWheels() . "<br>";

$motorcycle1 = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2, '53WVC14598');
$motorcycle2 = new Motorcycle('Suzuki', 'Gixxer SF', 'Blue', 2, '53WVC14599');
$motorcycle2 = new Motorcycle('Harley Davidson', 'Street 750', 'Black', 2, '53WVC14234');
echo "Available motorcycles are " . Motorcycle::$counter. "<br>";


?>