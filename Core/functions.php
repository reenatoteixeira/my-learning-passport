<?php
function dd(mixed $data): void
{
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
  die();
}

function base_path(string $path): string
{
  return BASE_PATH . $path;
}

function view(string $path, array $attributes = []): void
{
  extract($attributes);
  require base_path("views/{$path}");
}

function isActive(string $uri): bool
{
  return parse_url($_SERVER['REQUEST_URI'])['path'] === $uri;
}
