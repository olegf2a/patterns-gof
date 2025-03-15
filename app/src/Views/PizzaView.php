<?php

namespace App\Views;

use App\Factories\Builder\PizzaInterface;

class PizzaView
{
    public function __construct(
        private array $ingredients,
        private ?string $pizza = null,
        private ?string $error = null
    ) {
    }

    public function render(): void
    {
        include __DIR__ . '/Templates/PizzaTemplate.php';
    }
}
