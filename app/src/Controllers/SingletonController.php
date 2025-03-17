<?php

namespace App\Controllers;

use App\Patterns\Factories\Singleton\Exceptions\InvalidIdException;
use App\Patterns\Factories\Singleton\Singleton;
use App\Views\SingletonView;

class SingletonController extends AbstractController
{
    public static $name = 'Singleton';

    public function index(): void
    {
        parent::index();

        Singleton::init();

        $instances = [];
        $error = '';
        foreach (Singleton::getInstancesIds() as $id) {
            $instances[] = Singleton::getInstance($id);
        }
        try {
            $instances[] = Singleton::getInstance(42);
        } catch (InvalidIdException $exception) {
            $error = $exception->getMessage();
        }

        Singleton::init();
        foreach (Singleton::getInstancesIds() as $id) {
            $instances[] = Singleton::getInstance($id);
        }

        new SingletonView($instances, $error)->render();

        parent::footer();
    }
}
