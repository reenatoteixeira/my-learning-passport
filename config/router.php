<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
  '/' => './controllers/home.php',
  '/about' => './controllers/about.php',
  '/contact' => './controllers/contact.php',
];

routeToController($uri, $routes);