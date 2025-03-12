-- SQLite database structure and data

CREATE TABLE IF NOT EXISTS dishes (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    cuisine TEXT NOT NULL,
    meal TEXT NOT NULL CHECK (meal IN ('Breakfast', 'Lunch', 'Dinner')),
    type TEXT NOT NULL CHECK (type IN ('FirstMeal', 'SecondMeal', 'ThirdMeal', 'Dessert'))
);

INSERT INTO dishes (name, cuisine, meal, type) VALUES
    ('Scrambled eggs with bacon', 'American', 'Breakfast', 'FirstMeal'),
    ('Oatmeal with berries', 'American', 'Breakfast', 'FirstMeal'),
    ('Avocado toast', 'American', 'Breakfast', 'SecondMeal'),
    ('Pancakes with maple syrup', 'American', 'Breakfast', 'ThirdMeal'),
    ('Fruit yogurt parfait', 'American', 'Breakfast', 'Dessert'),

    ('Tomato basil soup', 'American', 'Lunch', 'FirstMeal'),
    ('Chicken noodle soup', 'American', 'Lunch', 'FirstMeal'),
    ('Cheeseburger with French fries', 'American', 'Lunch', 'SecondMeal'),
    ('Caesar salad', 'American', 'Lunch', 'ThirdMeal'),
    ('Apple pie', 'American', 'Lunch', 'Dessert'),

    ('Grilled salmon with vegetables', 'American', 'Dinner', 'FirstMeal'),
    ('BBQ ribs with baked potatoes', 'American', 'Dinner', 'SecondMeal'),
    ('Chicken Alfredo pasta', 'American', 'Dinner', 'ThirdMeal'),
    ('Chocolate brownie with ice cream', 'American', 'Dinner', 'Dessert'),

    ('Miso soup', 'Japanese', 'Breakfast', 'FirstMeal'),
    ('Onigiri (rice balls)', 'Japanese', 'Breakfast', 'SecondMeal'),
    ('Grilled fish', 'Japanese', 'Breakfast', 'ThirdMeal'),
    ('Daifuku mochi', 'Japanese', 'Breakfast', 'Dessert'),

    ('Tomato ramen', 'Japanese', 'Lunch', 'FirstMeal'),
    ('Chicken teriyaki', 'Japanese', 'Lunch', 'SecondMeal'),
    ('Tempura vegetables', 'Japanese', 'Lunch', 'ThirdMeal'),
    ('Mochi ice cream', 'Japanese', 'Lunch', 'Dessert'),

    ('Chawanmushi (Steamed egg custard)', 'Japanese', 'Dinner', 'FirstMeal'),
    ('Grilled salmon with rice', 'Japanese', 'Dinner', 'SecondMeal'),
    ('Udon noodles', 'Japanese', 'Dinner', 'ThirdMeal'),
    ('Dorayaki', 'Japanese', 'Dinner', 'Dessert'),

    ('Сирники зі сметаною', 'Ukrainian', 'Breakfast', 'FirstMeal'),
    ('Вареники з вишнею', 'Ukrainian', 'Breakfast', 'SecondMeal'),
    ('Млинці з медом', 'Ukrainian', 'Breakfast', 'ThirdMeal'),
    ('Пиріжки з яблуками', 'Ukrainian', 'Breakfast', 'Dessert'),

    ('Український борщ', 'Ukrainian', 'Lunch', 'FirstMeal'),
    ('Котлета по-київськи з пюре', 'Ukrainian', 'Lunch', 'SecondMeal'),
    ('Деруни зі сметаною', 'Ukrainian', 'Lunch', 'ThirdMeal'),
    ('Пиріг з яблуками', 'Ukrainian', 'Lunch', 'Dessert'),

    ('Салат з квашеної капусти', 'Ukrainian', 'Dinner', 'FirstMeal'),
    ('Печеня по-домашньому', 'Ukrainian', 'Dinner', 'SecondMeal'),
    ('Крученики з грибами', 'Ukrainian', 'Dinner', 'ThirdMeal'),
    ('Торт «Наполеон»', 'Ukrainian', 'Dinner', 'Dessert');
