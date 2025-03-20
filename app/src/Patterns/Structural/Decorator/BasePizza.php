<?php

namespace App\Patterns\Structural\Decorator;

class BasePizza implements PizzaInterface
{
    public function represent(): string
    {
        return "dough";
    }

    public function getPrice(): float
    {
        return 1.00;
    }
}
