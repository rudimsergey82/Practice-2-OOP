<?php

/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 14.07.2017
 * Time: 1:35
 */
class Vehicle
{
    private $vehicle;

    public function __construct(string $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function __toString()
    {
        return "{$this->vehicle}";
    }
}