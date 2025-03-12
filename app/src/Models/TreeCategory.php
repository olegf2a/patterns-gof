<?php

namespace App\Models;
use App\Database\Connection;
use PDO;

class TreeCategory
{
    public static function getAll(): array
    {
        $pdo = Connection::getInstance();
        $result = $pdo->query("SELECT id, score, children FROM tree_categories")
            ->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as &$row) {
            $row['children'] = json_decode($row['children'], true);
        }

        return $result;
    }
}