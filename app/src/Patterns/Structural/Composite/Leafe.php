<?php

namespace App\Patterns\Structural\Composite;

class Leafe implements ElementInterface
{
    public function __construct(
        private int $value = 0
    ) {
    }

    public function operation(int $delta): int
    {
        $this->value += $delta;
        return $this->value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
