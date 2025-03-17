<?php

namespace App\Patterns\Factories\Singleton;


use App\Patterns\Factories\Singleton\Exceptions\InvalidIdException;

class Singleton
{
    /**
     * @var Singleton[]
     */
    private static array $instances = [];

    private function __construct()
    {
    }

    public static function init()
    {
        if (!empty(self::$instances)) {
            return;
        }
        foreach (range(1, 10) as $id) {
            self::$instances[$id] = new self();
        }
    }

    public static function getInstance(int $id): Singleton
    {
        if (!isset(self::$instances[$id])) {
            throw new InvalidIdException();
        }
        return self::$instances[$id];
    }

    public static function getInstancesIds(): array
    {
        return array_keys(self::$instances);
    }
}
