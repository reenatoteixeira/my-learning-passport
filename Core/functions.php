<?php
function dd(mixed $data): void
{
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
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
