php artisan migrate:fresh --force
heroku run bash
composer install
php artisan db:seed --force
