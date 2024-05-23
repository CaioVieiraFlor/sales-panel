<?php

require 'Model.php';

class AddPizzaModel extends Model {
    public function add(string $nome, string $preco, string $caminhoImagem) {
        $sql = "INSERT INTO pizza SET nome = '$nome', preco = '$preco', figura = '$caminhoImagem'";
    
        return $this->pdo->query($sql) ? true : false;
    }
}