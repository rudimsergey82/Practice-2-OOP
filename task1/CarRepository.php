<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 12.07.2017
 * Time: 18:35
 */
include_once('Car.php');

class CarRepository implements CarRepositoryInterface
{
    public function getByMark(array $cars, string $mark): array
    {
        $autoByMark = [];
        foreach ($cars as $car) {
            if ($car->mark === strval($mark)) {
                $autoByMark[] = $car;
            }
        }
        return $autoByMark;

    }

    public function getByModel(array $cars, string $model, int $expluatationYears): array
    {
        $autoByModel = [];
        foreach ($cars as $car) {
            if (($car->model === strval($model)) && ((date("Y") - $car->yearManufacture) > $expluatationYears)) {
                $autoByModel[] = $car;
            }
        }
        return $autoByModel;
    }
}