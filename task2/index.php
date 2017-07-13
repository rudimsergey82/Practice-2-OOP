<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 14.07.2017
 * Time: 1:37
 */
require_once "Vehicle.php";
require_once "Driver.php";
require_once "Route.php";
require_once "Dispatcher.php";
require_once "Order.php";


$car1 = new Vehicle("BMW");
$car2 = new Vehicle("Mercedes");
$car3 = new Vehicle("Volvo");

$cars = [$car1, $car2, $car3];

$driver1 = new Driver("Василий");
$driver2 = new Driver("Григорий");
$driver3 = new Driver("Павел");

$drivers = [$driver1, $driver2, $driver3];

$route1 = new Route("Харьков", "Киев");
$route2 = new Route("Чоп", "Харьков");
$route3 = new Route("Киев", "Чоп");

$routes = [$route1, $route2, $route3];

$dispatcher1 = new Dispatcher("Даниил");
$dispatcher2 = new Dispatcher("Иван");
$dispatcher3 = new Dispatcher("Артем");
$dispatchers = [$dispatcher1, $dispatcher2, $dispatcher3];


Order::newOrder($routes, $drivers, $cars, $dispatchers);