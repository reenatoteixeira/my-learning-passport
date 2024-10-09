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