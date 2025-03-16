<?php

namespace App\Patterns\Factories\AbstractFactory\Factory;

use App\Patterns\Factories\AbstractFactory\Kitchen\KitchenInterface;

interface KitchenFactoryInterface
{
    public function createKitchen(): KitchenInterface;
}
