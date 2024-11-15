<?php

require __DIR__ . '/../vendor/autoload.php';

use Diogof648\SimplePhpRouter\Router;

Router::get('/', function () {
    require __DIR__ . '/../app/Views/index.php';
});

Router::get('/users', [(new \App\Controllers\UsersController()), 'index']);

Router::get('/users/create', [(new \App\Controllers\UsersController()), 'create']);

Router::post('/users', [(new \App\Controllers\UsersController()), 'store']);