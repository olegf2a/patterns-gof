<?php

namespace App\Patterns\Structural\Composite;

interface ElementInterface
{
    public function operation(int $delta): int;
    public function getValue(): int;
}
