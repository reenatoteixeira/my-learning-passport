<?php
const BASE_PATH = __DIR__ . '/../';

require '../Core/functions.php';

spl_autoload_register(static function ($class) {
  $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
  require basePath("{$class}.php");
});

$router = new \Core\Router();
$routes = require basePath('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
$router->route($uri, $method);
