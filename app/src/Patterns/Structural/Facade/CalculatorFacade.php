<?php

namespace App\Patterns\Structural\Facade;

use App\Patterns\Structural\Facade\Calculator\CalculatorInterface;
use App\Patterns\Structural\Facade\Calculator\DneOnlineCalculator;

/**
 * This is imitation of Facade, there supposed to be many dependencies that wrapped
 * into onne class that provided simple interface to interact with system.
 */
class CalculatorFacade
{
    public function __construct(
        private string $calculator
    ) {
    }

    public static function getAvailableCalculators(): array
    {
        return [
            DneOnlineCalculator::class
        ];
    }

    public function doOperation($operation, $a, $b)
    {
        return $this->getCalculator()->doOperation($operation, $a, $b);
    }

    public function getAvailableOperations(): array
    {
        return $this->getCalculator()->getAvailableOperations();
    }

    private function getCalculator(): CalculatorInterface
    {
        CalculatorFactoryMethod::setCalclator($this->calculator);
        return CalculatorFactoryMethod::getCalculator();
    }
}
