<?php declare(strict_types=1);

namespace App\Controllers;

class HomeController extends AbstractController
{
    public static $name = 'Home';
    public function index(): void
    {
        parent::index();
        $type = $this->get['type'] ?? '';
        echo "Hello, PHP 8.4 in Docker! " . $type;
        parent::footer();
    }
}