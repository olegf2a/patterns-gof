<?php

namespace App\Views;


use App\Patterns\Structural\Decorator\PizzaInterface;

class Pizza2View
{
    public function __construct(
        private ?PizzaInterface $pizza = null,
        private $ingredients = []
    ) {
    }

    public function getPizza(): PizzaInterface
    {
        return $this->pizza;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function render(): void
    {
        include __DIR__ . '/Templates/pizza-decorator-template.phtml';
    }
}
