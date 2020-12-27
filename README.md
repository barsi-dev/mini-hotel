# Timbertrack

Database management software made for Timbertrack.

## Run the following commands before after cloning the project

**do not forget to set 'DB_DATABASE' on your .env file**

```bash
git clone https://github.com/barsi-dev/timbertrack
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```
