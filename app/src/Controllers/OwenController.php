<?php

namespace App\Controllers;
use App\Factories\Dish\AbstractDish;

class OwenController extends AbstractController
{
    public static $name = 'Owen';

    public function index(): void
    {
        parent::index();

        foreach (AbstractDish::MENU as $dish => $dishName) {
            try {
                $dish = AbstractDish::getDish($dish);
                $type = $this->get['type'] ?? '';
                $dish->cook($type);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        }
        parent::footer();
    }
}