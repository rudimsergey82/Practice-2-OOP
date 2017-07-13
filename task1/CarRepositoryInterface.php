<?php

/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 14.07.2017
 * Time: 0:20
 */
interface CarRepositoryInterface
{
    public function getByMark(array $cars, string $mark): array;

    public function getByModel(array $cars, string $model, int $expluatationYears): array;

}