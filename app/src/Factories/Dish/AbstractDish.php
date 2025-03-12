<?php

namespace App\Factories\Dish;

use Exception;

abstract class AbstractDish
{
    public const array MENU = [
        'salmon' => Salmon::class,
        'pork' => Pork::class,
    ];

    /**
     * @throws Exception
     */
    public static function getDish($kind): self
    {
        if (!isset(self::MENU[$kind])) {
            throw new Exception('invalid kind');
        }

        return new (self::MENU[$kind])();
    }

    abstract public function cook(?string $get = ''): void;
}