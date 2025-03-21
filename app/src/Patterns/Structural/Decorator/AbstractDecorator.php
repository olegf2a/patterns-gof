<?php

namespace App\Patterns\Structural\Decorator;

abstract class AbstractDecorator implements PizzaInterface
{
    public const ADDING_PRICE = "";
    public const ADDING_NAME = "";

    public function __construct(
        private readonly PizzaInterface $pizza
    ) {
    }

    public function getPrice(): float
    {
        return $this->pizza->getPrice() + (float)static::ADDING_PRICE;
    }

    public function represent(): string
    {
        return sprintf("%s + %s", $this->pizza->represent(), static::ADDING_NAME);
    }
}
