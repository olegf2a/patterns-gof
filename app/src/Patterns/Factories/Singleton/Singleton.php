<?php

namespace App\Patterns\Factories\Singleton;


use App\Patterns\Factories\Singleton\Exceptions\LimitException;

class Singleton
{
    /**
     * @var Singleton[]
     */
    private static array $instances = [];

    private function __construct()
    {
    }

    public static function getInstance(string $name): Singleton
    {
        if (!empty(self::$instances[$name])) {
             return self::$instances[$name];
        }
        if (count(self::$instances) >= 10) {
            throw new LimitException("Maximum amount of instances are reached");
        }

        return self::$instances[$name] = new self();
    }

    public static function getInstancesNames(): array
    {
        return array_keys(self::$instances);
    }
}
