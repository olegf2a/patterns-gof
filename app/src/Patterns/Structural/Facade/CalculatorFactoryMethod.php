<?php

namespace App\Patterns\Structural\Facade;

use App\Patterns\Structural\Facade\Calculator\CalculatorInterface;

class CalculatorFactoryMethod
{
    protected static string|null $calculatorClass = null;

    public static function setCalclator(string $name)
    {
        self::$calculatorClass = $name;
    }

    public static function getCalculator(): CalculatorInterface
    {
        if (empty(self::$calculatorClass)) {
            throw new \Exception("Calculator is not set");
        }
        $calculator = new (self::$calculatorClass);
        if ($calculator instanceof CalculatorInterface) {
            return $calculator;
        }
        throw new \Exception("Wrong calculator class");
    }
}
