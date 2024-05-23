<?php

class Model {
    private string $dsn = "mysql:dbname=aula_09";
    private string $dbuser = "root";
    private string $dbpass = "";
    protected $pdo;

    public function __construct() {
        $this->pdo = $this->connection();
    }

    private function connection() {
        $pdo = null;
        try {
            // O PDO verifica os três parâmetros
            $pdo = new PDO($this->dsn, $this->dbuser, $this->dbpass);
            
        } catch (PDOException $e) {
            // Excessão do PDO caso um dos parametros for falso
            $pdo = "Falha ao conectar a base de dados!";
        }

        return $pdo;
    }

    public function getConnection() {
        return $this->pdo;
    }
}