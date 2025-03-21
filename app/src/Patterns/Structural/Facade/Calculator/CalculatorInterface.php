<?php

namespace App\Patterns\Structural\Facade\Calculator;

interface CalculatorInterface
{
    public function getAvailableOperations(): array;

    public function doOperation(string $operation, int $a, int $b);
}
