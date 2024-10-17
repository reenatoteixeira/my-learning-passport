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
    require basePath($routes[$uri]);
  } else {
    abort(Response::NOT_FOUND);
  }
}

function abort(int $code): void
{
  http_response_code($code);
  view("errors/{$code}.php");
  die();
}

function basePath(string $path): string
{
  return BASE_PATH . $path;
}

function view(string $path, array $data = []): void
{
  extract($data);
  require basePath("views/{$path}");
}