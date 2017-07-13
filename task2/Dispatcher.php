<?php

/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 14.07.2017
 * Time: 1:31
 */
class Dispatcher
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return "{$this->name}";
    }
}