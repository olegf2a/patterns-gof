<?php declare(strict_types=1);

namespace App\Models;

use App\Database\Connection;
use PDO;

class Dish
{
    public static function getAll(): array
    {
        $pdo = Connection::getInstance();
        $stmt = $pdo->query("SELECT * FROM dishes");
        return $stmt->fetchAll();
    }

    public static function getByType(string $type): array
    {
        $pdo = Connection::getInstance();
        $stmt = $pdo->prepare("SELECT * FROM dishes WHERE type = :type");
        $stmt->execute(['type' => $type]);
        return $stmt->fetchAll();
    }

    public static function getByCuisine(string $cuisine): array
    {
        $pdo = Connection::getInstance();
        $stmt = $pdo->prepare("SELECT * FROM dishes WHERE cuisine = :cuisine");
        $stmt->execute(['cuisine' => $cuisine]);
        return $stmt->fetchAll();
    }
}
