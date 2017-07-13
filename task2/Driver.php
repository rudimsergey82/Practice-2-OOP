<?php

/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 14.07.2017
 * Time: 1:33
 */
class Driver
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return "{$this->name}";
    }
}