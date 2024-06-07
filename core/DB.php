<?php

namespace core;

class DB
{
    public $pdo;

    public function __construct($host, $name, $login, $password)
    {
        $this->pdo = new \PDO("mysql:host={$host};dbname={$name}", $login, $password,
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
            ]
        );
    }

    public function insert($table, $data)
    {
        $fields = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));
        $sql = "INSERT INTO $table ($fields) VALUES ($placeholders)";
        $stmt = $this->pdo->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
    }

    public function update($table, $data, $where)
    {
        $fields = implode(' = ?, ', array_keys($data)) . ' = ?';
        $whereClause = implode(' = ? AND ', array_keys($where)) . ' = ?';
        $sql = "UPDATE $table SET $fields WHERE $whereClause";
        $stmt = $this->pdo->prepare($sql);
        $values = array_merge(array_values($data), array_values($where));
        $stmt->execute($values);
    }

    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }
}
