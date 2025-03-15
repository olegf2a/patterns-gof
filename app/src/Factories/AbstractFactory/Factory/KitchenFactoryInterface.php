<?php

namespace App\Factories\AbstractFactory\Factory;

use App\Factories\AbstractFactory\Kitchen\KitchenInterface;

interface KitchenFactoryInterface
{
    public function createKitchen(): KitchenInterface;
}
