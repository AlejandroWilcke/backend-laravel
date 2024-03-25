# Backend Laravel

## Requirements
- PHP 8.1-8.3
- Laravel 10
- Composer
- MySQL

## Setup
```
git clone https://github.com/AlejandroWilcke/backend-laravel.git
```
```
cd backend-laravel
```
```
composer install
```
Copiar un .env de .env.example y modificar estas variables:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={nombreDB}
DB_USERNAME={nombreUsuario}
DB_PASSWORD={passwordUsuario}
```
Generar Laravel App Key
```
php artisan key:generate
```

## Crear tablas
```
php artisan migrate
```

## Seedear categories y entities
```
php artisan db:seed
```

## Correr App
```
php artisan serve
```

## Testing
```
composer test
```

## Endpoint
```
http://localhost:8000/api/{categoryId}
```
Example: http://localhost:8000/api/1
