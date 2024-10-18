<?php

namespace Core;

class Router
{
  protected array $routes = [];
  
  public function add(string $uri, string $controller, string $method): void
  {
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => $method
    ];
  }
  
  public function get(string $uri, string $controller): void
  {
    $this->add($uri, $controller, 'GET');
  }
  
  public function route(string $uri, string $method): mixed
  {
    foreach ($this->routes as $route) {
      if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
        return require basePath($route['controller']);
      }
    }
    
    $this->abort();
    return null;
  }
  
  protected function abort(int $code = 404): void
  {
    http_response_code($code);
    view("errors/{$code}.php");
    die();
  }
}
