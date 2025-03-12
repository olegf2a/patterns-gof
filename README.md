# leo-gof

To Deploy and run project locally run docker-compose up -d

To run seeders for Sqlite 
```
sqlite3 /var/www/html/database/database.sqlite < /var/www/html/database/seed.sql
sqlite3 /var/www/html/database/database.sqlite < /var/www/html/database/seed_tree_categories.sql
```

homepage is http://0.0.0.0:8080/home
