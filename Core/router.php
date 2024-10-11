<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
  '/' => '../Http/controllers/index.php',
  '/about' => '../Http/controllers/about.php',
  '/contact' => '../Http/controllers/contact.php',
  '/student/login' => '../Http/controllers/student/login.php',
  '/teacher/login' => '../Http/controllers/teacher/login.php',
  '/teacher/register' => '../Http/controllers/teacher/register.php',
];

routeToController($uri, $routes);