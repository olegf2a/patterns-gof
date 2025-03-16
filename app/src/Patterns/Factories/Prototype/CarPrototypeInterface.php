<?php

namespace App\Patterns\Factories\Prototype;

interface CarPrototypeInterface
{
    public function cloneCar($color, $licencePlate): CarPrototypeInterface;
}
