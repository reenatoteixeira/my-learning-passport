<?php

namespace Core;

use PDO;

class Database
{
  public $conn;
  public $stmt;
  
  public function __construct(array $config)
  {
    $dsn = 'mysql:' . http_build_query($config, '', ';');
    
    $this->conn = new PDO($dsn, $config['username'], $config['password'],
      [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
  }
  
  public function query(string $query, array $params = []): static
  {
    $this->stmt = $this->conn->prepare($query);
    $this->stmt->execute($params);
    
    return $this;
  }
  
  public function find(): array|bool
  {
    return $this->stmt->fetch();
  }
}
