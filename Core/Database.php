<?php

class Database
{
  public PDO $connection;
  
  public function __construct(array $config)
  {
    $dsn = 'mysql:' . http_build_query($config, '', ';');
    
    $this->connection = new PDO($dsn);
  }
  
  public function query(string $query, array $params = []): false|PDOStatement
  {
    $stmt = $this->connection->prepare($query);
    $stmt->execute($params);
    return $stmt;
  }
}