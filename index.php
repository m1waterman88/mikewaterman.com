<?php

// Autoloading
require_once 'vendor/autoload.php';

// Load Twig
$loader = new \Twig\Loader\FilesystemLoader('views');
$twig = new \Twig\Environment($loader);

// Database
// $database = require_once 'core/Database.php';

// Routing
require_once 'core/Router.php';
$uri = trim($_SERVER['REQUEST_URI'], '/');
$routes = require_once 'routes.php';
$router = new Router($routes);
require_once $router->direct($uri);
