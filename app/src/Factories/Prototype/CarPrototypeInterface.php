<?php

namespace App\Factories\Prototype;

interface CarPrototypeInterface
{
    public function cloneCar($color, $licencePlate): CarPrototypeInterface;
}
