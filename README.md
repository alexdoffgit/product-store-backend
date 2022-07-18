# Requirement
1. php 7.4
2. mbstring, bcmath, curl, zip, xml, sqlite
3. nginx

# Install
1. composer install
2. copy .env.example to .env
3. create localdb/db.sqlite3
4. php artisan migrate
5. sudo chown -R $USER:www-data storage
6. sudo chown -R $USER:www-data bootstrap/cache
7. sudo chmod -R 775 storage
8. sudo chmod -R 775 bootstrap/cache