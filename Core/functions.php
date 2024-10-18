<?php

use Core\Response;

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