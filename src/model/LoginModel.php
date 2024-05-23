<?php

require 'Model.php';

class LoginModel extends Model {
    public function login(string $email, string $senha) {
        $sql = $this->pdo->query("SELECT * FROM user WHERE email = '$email' AND senha = '$senha' ");

        if ($sql->rowCount() > 0) {
            $dados = $sql->fetch();
            $_SESSION['id'] = $dados['id'];
            $_SESSION['nome'] = $dados['nome'];
            $_SESSION['email'] = $dados['email'];
            
            return true;
        } else {
            return false;
        }
    }
}