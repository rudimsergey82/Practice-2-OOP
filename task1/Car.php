<?php

/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 12.07.2017
 * Time: 18:33
 */
include_once('CarRepositoryInterface.php');

class Car
{
    public $id;
    public $mark;
    public $model;
    public $yearManufacture;
    public $color;
    public $price;
    public $RegistrationNumber;

    public function __construct(int $id, string $mark, string $model, int $yearManufacture, string $color, int $price, string $RegistrationNumber)
    {
        $this->id = $id;
        $this->mark = $mark;
        $this->model = $model;
        $this->yearManufacture = $yearManufacture;
        $this->color = $color;
        $this->price = $price;
        $this->RegistrationNumber = $RegistrationNumber;
    }

    public function getInfo()
    {
        echo "<br>" . "Id car:." . $this->id;
        echo "<br>" . "Mark car:" . $this->mark;
        echo "<br>" . "Model car:" . $this->model;
        echo "<br>" . "Year manufacture:" . $this->yearManufacture;
        echo "<br>" . "Colour:" . $this->color;
        echo "<br>" . "Price:" . $this->price;
        echo "<br>" . "Registration number:" . $this->RegistrationNumber;
        echo "<br>" . "------------------------" . "<br>";
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMark(): string
    {
        return $this->mark;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getYearManufacture(): int
    {
        return $this->yearManufacture;
    }

    public function getColour(): string
    {
        return $this->color;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getRegistrationNumber(): string
    {
        return $this->RegistrationNumber;
    }

}