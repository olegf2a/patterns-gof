<?php

namespace App\Views;

use App\Patterns\Factories\Builder\PizzaInterface;

class PizzaView
{
    public function __construct(
        private array $ingredients,
        private ?PizzaInterface $pizza = null,
        private ?string $error = null
    ) {
    }

    public function render(): void
    {
        include __DIR__ . '/Templates/pizza_template.php';
    }
}
