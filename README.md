# Backend Laravel

## Requirements
- PHP 8.1-8.3
- Laravel 10
- MySQL

## Setup
Copiar un .env de .env.example y configurar estas variables:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={nombreDB}
DB_USERNAME={nombreUsuario}
DB_PASSWORD={passwordUsuario}
```

## Crear tablas
```
php artisan migrate
```

## Crear tablas
```
php artisan db:seed
```

## Endpoint
```
http://localhost:8000/api/{categoryId}
```
Example: http://localhost:8000/api/1
