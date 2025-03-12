<?php

namespace App\Factories\AbstractFactory\Factory;

use App\Factories\AbstractFactory\Kitchen\Japan;
use App\Factories\AbstractFactory\Kitchen\KitchenInterface;

class JapanKitchenFactory implements KitchenFactoryInterface
{
    public function createKitchen(): KitchenInterface
    {
        return new Japan();
    }
}
