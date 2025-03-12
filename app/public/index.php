<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Routes\Router;

try {
    if ($_SERVER['REQUEST_URI'] == '/favicon.ico') {
        return;
    }

    $controller = Router::getController($_SERVER['REQUEST_URI']);
    echo $controller->index();
} catch (Exception $e) {
    echo $e->getMessage();
}