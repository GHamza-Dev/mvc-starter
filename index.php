<?php
session_start();
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

define('DS', DIRECTORY_SEPARATOR);
require_once './config/config.php';
require_once ROOT . '/helpers/filter.php';
require_once ROOT . '/helpers/session.php';

require_once './dump.php';

spl_autoload_register(function ($className) {
  include $className . '.php';
});

$router = new \Bramus\Router\Router();

require __DIR__ . '/routes.php';

$router->run();
