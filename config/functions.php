<?php

function abort(int $code = 404): void
{
    http_response_code($code);
    require(__DIR__ . "/../controllers/{$code}.php");
    die();
}

function routeToController(string $uri, array $routes): void
{
  array_key_exists($uri, $routes) ? require($routes[$uri]) : abort();
}