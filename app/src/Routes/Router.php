<?php

namespace App\Routes;

use App\Controllers\BridgeCafeController;
use App\Controllers\CarDealerController;
use App\Controllers\HomeController;
use App\Controllers\OwenController;
use App\Controllers\InternationalCafeController;
use App\Controllers\SingleObjectTypeController;
use App\Controllers\PizzaController;
use App\Controllers\Structural\TreeController;
use App\Controllers\WeatherController;

class Router
{
    public const array ROUTES = [
        'home' => HomeController::class,
        'owen' => OwenController::class,
        'international-cafe' => InternationalCafeController::class,
        'car-dealer' => CarDealerController::class,
        'pizza' => PizzaController::class,
        'Weather' => WeatherController::class,
        'singleton' => SingleObjectTypeController::class,
        'bridge-cafe' => BridgeCafeController::class,
        'tree' => TreeController::class,
    ];

    public static function getController(string $url = 'home')
    {
        $requestData = $_SERVER['QUERY_STRING'];
        $url = strrpos($url, '?') ? substr($url, 0, strrpos($url, '?')) : $url;
        if (empty($url) || $url === 'home') {
            return new (self::ROUTES['home'])([$requestData]);
        }

        $controller = explode('/', $url);

        if (!array_key_exists($controller[1], self::ROUTES)) {
            throw new \Exception('invalid url');
        }

        return new (self::ROUTES[$controller[1]])($_GET, $_POST);
    }
}
