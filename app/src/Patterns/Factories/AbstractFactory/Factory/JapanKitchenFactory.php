<?php

namespace App\Patterns\Factories\AbstractFactory\Factory;

use App\Patterns\Factories\AbstractFactory\Kitchen\Japan;
use App\Patterns\Factories\AbstractFactory\Kitchen\KitchenInterface;

class JapanKitchenFactory implements KitchenFactoryInterface
{
    public function createKitchen(): KitchenInterface
    {
        return new Japan();
    }
}
