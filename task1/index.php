<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 12.07.2017
 * Time: 18:36
 */

//require_once "Car.php";
require_once "CarRepository.php";
$mark = 'BMW';
$model = 'M5';
$year = '2';

$cars[] = new Car(1, "BMW", "M5", 2007, "grey", 60000, "AX1234AE");
$cars[] = new Car(2, "Bentley", "Continental", 2015, "black", 170000, "AX8888AE");
$cars[] = new Car(3, "Rolls Royce", "Phantom", 2016, "white", 400000, "AX7777AE");
$cars[] = new Car(4, "Mercedes", "S500", 2012, "silver", 100000, "AX2222AE");
$cars[] = new Car(5, "Audi", "RS6", 2017, "red", 50000, "AX3333AH");
$cars[] = new Car(6, "Aston Martin", "Vanquish", 2014, "black", 250000, "AX4545AE");
$cars[] = new Car(7, "Maserati", "Quattroporte", 2015, "silver", 300000, "AX3434AE");
$cars[] = new Car(8, "Mercedes", "GLS500", 2003, "back", 80000, "AX7575AE");
$cars[] = new Car(9, "BMW", "M5", 2010, "blue", 80000, "AX4534AE");
$cars[] = new Car(10, "Bentley", "Mulsanne", 2009, "white", 240000, "AX7676AE");


$selectAuto = new CarRepository();

echo "Выборка авто по марке Audi:";
echo "<br>" . "======================" . "<br>";
$autoByMark = $selectAuto->getByMark($cars, $mark);
foreach ($autoByMark as $car) {
    $car->getInfo();
}
echo "<br>" . "=====================================================" . "<br>";
echo "Выборка авто по моделе (M5) которые эксплуатируются больше $year лет:";
echo "<br>" . "=====================================================" . "<br>";
$autoByModel = $selectAuto->getByModel($cars, $model, $year);
foreach ($autoByModel as $car) {
    $car->getInfo();
}

