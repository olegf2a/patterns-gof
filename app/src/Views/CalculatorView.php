<?php

namespace App\Views;

class CalculatorView
{
    public function __construct(
        private array $operations,
        private $result = null
    ) {
    }

    public function getOperations(): array
    {
        return $this->operations;
    }

    public function gerResult()
    {
        return $this->result;
    }

    public function render(): void
    {
        include __DIR__ . '/Templates/calculator-template.phtml';
    }
}
