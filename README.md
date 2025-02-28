# Laravel Env Manager
This package allows you to manage your .env file from a GUI.

## Installation
```sh
composer require ashokdevatwal/laravel-env-manager
```

## Configuration
```sh
php artisan vendor:publish --tag=config
```
Add the following to your `.env` file:
```env
ENV_MANAGER_ENABLED=true
ENV_MANAGER_USERNAME=admin
ENV_MANAGER_PASSWORD=securepassword
```

## Usage
Visit `/env-manager` in your browser and log in using Basic Auth credentials.
