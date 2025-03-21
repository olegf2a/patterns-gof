<?php

namespace App\Patterns\Structural\Decorator;

interface PizzaInterface
{
    public function represent(): string;

    public function getPrice(): float;
}
