<?php

namespace App\Controllers;

use App\Patterns\Factories\Singleton\Exceptions\LimitException;
use App\Patterns\Factories\Singleton\Singleton;
use App\Views\SingletonView;

class SingletonController extends AbstractController
{
    public static $name = 'Singleton';

    public function index(): void
    {
        parent::index();

        $instances = [];
        $error = '';
        try {
            $i = 1;
            while ($i < 20) {
                $name = rand(1111, 9999);
                $instances[$name] = Singleton::getInstance($name);
                $i++;
            }
        } catch (LimitException $exception) {
            $error = $exception->getMessage();
        }

        foreach (Singleton::getInstancesNames() as $name) {
            $instances[] = Singleton::getInstance($name);
        }
        
        new SingletonView($instances, $error)->render();

        parent::footer();
    }
}
