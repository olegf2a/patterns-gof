<?php

namespace App\Views;
class DealerView
{
    public function __construct(
        private array $availableCars =[]
    ) {
    }

    public function render(): void
    {
        include __DIR__ . '/Templates/DealerTemplate.php';
    }
}
