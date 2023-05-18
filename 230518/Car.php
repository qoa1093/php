<?php
require_once 'Vehicle1.php';

class Car extends Vehicle{
    public $doors = 4;
    public $passengerCapacity = 5;
    public $steeringWheel = true;
    public $transmission = 'Manual';
}
//객체가 아니라 객체 핸들러
$car = new Car('Honda', 'Civic', 'Red', 4, '23CJ4567');
echo "Vehicle Type: " . get_class($car) . "<br>"; //객체가 만들어진 타입을 알아냄
echo " Make: " . $car->getMake() . "<br>";//객체핸들러에 오퍼레이터를 써서 참조함.
echo " Model: " . $car->getModel() . "<br>";
echo " Color: " . $car->getColor() . "<br>";
echo " No of wheels: " . $car->getNoOfWheels() . "<br>";
echo " No of Doors: " . $car->doors . "<br>";
echo " Transmission: " . $car->transmission . "<br>";
echo " Passenger capacity: " . $car->passengerCapacity . "<br>";
if($car->steeringWheel){
    echo ("this car has a steeringwheel<br>");
}
echo "<br>";
$car1 = new Car('Honda', 'Civic', 'Red', 4, '23CJ4567');
$car2 = new Car('Toyota', 'Allion', 'White', 4, '24CJ4568');
$car3 = new Car('Hyundai', 'Elantra', 'Black', 4, '24CJ1234');
$car4 = new Car('Chevrolet', 'Camaro', 'Yellow', 4, '23CJ9397');
echo "Available cars are " . Car::$counter . "<br>";



?>