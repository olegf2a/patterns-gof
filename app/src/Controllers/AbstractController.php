<?php declare(strict_types=1);

namespace App\Controllers;

use App\Routes\Router;
use App\Views\FooterView;
use App\Views\HeaderNavigationView;

abstract class AbstractController
{
    public static $name = 'NONAME';

    public function __construct(
        protected array $get,
        protected array $post
    ) {
    }

    public function index(): void
    {
        new HeaderNavigationView(
            static::$name,
            Router::ROUTES,
        )->render();
    }

    public function footer(): void
    {
        new FooterView()->render();
    }
}