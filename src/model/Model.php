<?php

class Model {
    private string $dsn = "mysql:dbname=aula_09";
    private string $dbuser = "root";
    private string $dbpass = "";
    protected ?object $pdo;

    public function __construct() {
        $this->pdo = $this->connection();
        if (!$this->pdo) {
            throw new PDOException('Falha ao conectar a base de dados!');
        }
    }

    private function connection() {
        try {
            $pdo = new PDO($this->dsn, $this->dbuser, $this->dbpass);
            
        } catch (PDOException $e) {
            $pdo = null;
        }

        return $pdo;
    }
}