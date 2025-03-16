<?php

namespace App\Patterns\Factories\Prototype;

interface CarInterface
{
    public function getCarType();

    public function getColor();

    public function getLicencePlate();
}
