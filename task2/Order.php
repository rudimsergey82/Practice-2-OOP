<?php

/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 14.07.2017
 * Time: 1:34
 */
require_once "Vehicle.php";
require_once "Driver.php";
require_once "Route.php";
require_once "Dispatcher.php";

class Order
{
    public static function newOrder(array $routes, array $drivers, array $cars, array $dispatchers)
    {
        $randomDriver = array_rand($drivers, 1);
        $driver = $drivers[$randomDriver];
        $randomDispatcher = array_rand($dispatchers, 1);
        $dispatcher = $dispatchers[$randomDispatcher];
        $randomCar = array_rand($cars, 1);
        $car = $cars[$randomCar];
        $randomRoute = array_rand($routes, 1);
        $route = $routes[$randomRoute];
        echo "Диспетчер " . $dispatcher . " назначил водителя " . $driver . " на маршрут " . $route . " на автомобиле " . $car . ".<br>";
    }
}