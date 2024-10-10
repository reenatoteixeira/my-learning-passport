<?php

class Database
{
public PDO $connection;

public function __construct($host, $port, $dbname, $user, $password, $charset)
{
$dsn = "mysql:host={$host};port={$port};dbname={$dbname};user={$user};password={$password};charset={$charset}";

$this->connection = new PDO($dsn);
}

public function query(string $query)
{
return $this->connection->query($query);
}
}