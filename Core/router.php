<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = require basePath('routes.php');
routeToController($uri, $routes);