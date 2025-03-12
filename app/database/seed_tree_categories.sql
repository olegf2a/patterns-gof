DROP TABLE IF EXISTS tree_categories;

CREATE TABLE tree_categories (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    score INTEGER NOT NULL,
    children TEXT NOT NULL DEFAULT '[]' -- JSON-рядок
);

INSERT INTO tree_categories (id, score, children) VALUES
    (1, 50, '[[2, 3]]'),
    (2, 30, '[4, 5]'),
    (3, 20, '[6, 7]'),
    (4, 25, '[8, 9]'),
    (5, 5, '[10]'),
    (6, 10, '[11]'),
    (7, 10, '[12]'),
    (8, 15, '[]'),
    (9, 10, '[]'),
    (10, 5, '[]'),
    (11, 10, '[]'),
    (12, 10, '[]'),
    (13, 60, '[14, 15]'),
    (14, 40, '[16, 17]'),
    (15, 20, '[18, 19]'),
    (16, 25, '[]'),
    (17, 15, '[]'),
    (18, 10, '[]'),
    (19, 10, '[]');
