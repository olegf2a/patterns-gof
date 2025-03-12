<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($this->title) ?></title>
    <style>
        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        .header {
            background-color: #333;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap; /* Дозволяє переносити меню */
        }

        .nav {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap; /* Дозволяє багаторядкове меню */
            justify-content: center;
            gap: 15px; /* Мінімальні відступи між кнопками */
            max-width: 700px; /* Щоб не виходило за межі контейнера */
        }

        .nav li {
            display: inline-block;
        }

        .nav a {
            color: white;
            text-decoration: none;
            font-size: 14px; /* Зменшений шрифт */
            padding: 6px 12px; /* Зменшений padding */
            border-radius: 15px; /* Менше закруглення */
            background: rgba(255, 255, 255, 0.1);
            transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
            white-space: nowrap; /* Запобігає переносу тексту всередині кнопки */
        }

        .nav a:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.05);
        }

        /* Додаємо стиль для dropdown (меню "Ще") */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #444;
            min-width: 150px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 10;
            border-radius: 5px;
            overflow: hidden;
        }

        .dropdown-content a {
            color: white;
            padding: 8px 12px;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #555;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Адаптація для мобільних пристроїв */
        @media screen and (max-width: 768px) {
            .nav {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

<header class="header">
    <div class="logo"><?= htmlspecialchars($this->title) ?></div>
    <nav>
        <ul class="nav">
            <?= $navigationLinks; ?>
        </ul>
    </nav>
</header>
