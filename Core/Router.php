<?php

namespace Core;

class Router
{
  protected array $routes = [];
  
  public function get(string $uri, string $controller): static
  {
    return $this->add('GET', $uri, $controller);
  }
  
  public function add(string $method, string $uri, string $controller): static
  {
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => $method,
    ];
    
    return $this;
  }
  
  public function route(string $uri, string $method): mixed
  {
    foreach ($this->routes as $route) {
      if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
        return require base_path("Http/controllers/{$route['controller']}");
      }
    }
    
    $this->abort();
  }
  
  public function abort(int $code = 404): void
  {
    http_response_code($code);
    require base_path('views/errors/404.php');
    die();
  }
}
