<?php

namespace App\Factories\AbstractFactory\Factory;

use App\Factories\AbstractFactory\Kitchen\KitchenInterface;
use App\Factories\AbstractFactory\Kitchen\Usa;

class UsaKitchenFactory implements KitchenFactoryInterface
{
    public function createKitchen(): KitchenInterface
    {
        return new Usa();
    }
}
