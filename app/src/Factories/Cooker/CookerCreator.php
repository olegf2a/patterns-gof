<?php

namespace App\Factories\Cooker;

class CookerCreator
{
    public const CHICKEN_COOKER = "chicken";
    public const HOTDOG_COOKER = "hotdog";
    public const BBQ_COOKER = "bbq";

    private const AVAILABLE_DISHES_COOKER_MAP = [
        self::CHICKEN_COOKER => ChickenCooker::class,
        self::HOTDOG_COOKER => HotdogCooker::class,
        self::BBQ_COOKER => BbqCooker::class
    ];

    public static function getCooker($type)
    {
        if (empty(self::AVAILABLE_DISHES_COOKER_MAP[$type])) {
            throw new \Exception(sprintf("Invalid cooker type: %s", $type));
        }
        return new(self::AVAILABLE_DISHES_COOKER_MAP[$type]);
    }

    public static function getAvailable()
    {
        return array_keys(self::AVAILABLE_DISHES_COOKER_MAP);
    }
}
