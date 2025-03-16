<?php

namespace App\Views;

class DealerView
{
    public function __construct(
        private array $cars
    ) {
    }

    public function render(): void
    {
        include __DIR__ . '/Templates/dealer_template.phtml';
    }
}
