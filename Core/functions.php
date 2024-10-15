<?php
function dd(mixed $data): void
{
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
  die();
}

function isActive(string $uri): bool
{
  return parse_url($_SERVER['REQUEST_URI'])['path'] === $uri;
}

function routeToController(string $uri, array $routes): void
{
  if (array_key_exists($uri, $routes)) {
    require($routes[$uri]);
  } else {
    abort(Response::NOT_FOUND);
  }
}

function abort(int $code): void
{
  http_response_code($code);
  require "../views/errors/{$code}.php";
  die();
}