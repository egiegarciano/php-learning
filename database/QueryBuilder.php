<?php

class QueryBuilder
{
    protected $pdo;

    // "Type hinting" defines type of values that can be passed as an argument:
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $query = $this->pdo->prepare("select * from {$table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}