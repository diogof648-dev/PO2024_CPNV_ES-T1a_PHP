@echo off
set DB_DSN="mysql:host=127.0.0.1;port=3306;dbname=YOUR_DB_NAME"
set DB_USER="YOUR_USER"
set DB_PASSWORD="YOUR_PASSWORD"
php -S localhost:8080 -t public/
pause
