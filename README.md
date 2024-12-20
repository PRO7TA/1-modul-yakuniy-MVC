_s1. config/database.php da keylarni tog'irlang

2. posts table yarating
```sql
CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

3. servernin ishlating
```bash
php -S localhost:8000 -t public
```