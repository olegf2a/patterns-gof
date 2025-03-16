<?php

namespace App\Patterns\Factories\AbstractFactory\Factory;

use App\Patterns\Factories\AbstractFactory\Kitchen\KitchenInterface;
use App\Patterns\Factories\AbstractFactory\Kitchen\Usa;

class UsaKitchenFactory implements KitchenFactoryInterface
{
    public function createKitchen(): KitchenInterface
    {
        return new Usa();
    }
}
