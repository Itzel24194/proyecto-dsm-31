<?php

use App\Core\Router;

$router = new Router();

// Definir las rutas
$router->add('/', 'HomeController@index');
$router->add('/login', 'AuthController@showLoginForm');
return $router;