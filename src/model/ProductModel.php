<?php

require 'Model.php';

class ProductModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getProducts() {
        $sql = "select * from produto";
        $query = $this->pdo->query($sql);
        return $query->fetchall();
    }

    public function getProduct($productCode) {
        $sql = "SELECT * FROM produto WHERE cod = '$productCode'";
        $query = $this->pdo->query($sql);
        return $query->fetchall();
    }

    public function add(string $name, string $price, int $qtd, string $imageDir) {
        $sql = "INSERT INTO produto SET nome = '$name', preco = '$price', qtd = '$qtd', figura = '$imageDir'";
    
        return $this->pdo->query($sql) ? true : false;
    }

    public function update(string $productCode, string $name, string $price, int $qtd, string $imageDir) {
        $sql = "UPDATE produto SET nome = '$name', preco = '$price', qtd = '$qtd', figura = '$imageDir' WHERE cod = '$productCode'";
        return $this->pdo->query($sql) ? true : false;
    }

    public function productSaleDelete(string $code) {
        $sql = "DELETE FROM produto_venda WHERE cod_produto = '$code'";
    
        return $this->pdo->query($sql) ? true : false;
    }

    public function delete(string $code) {
        $sql = "DELETE FROM produto WHERE cod = '$code'";
    
        return $this->pdo->query($sql) ? true : false;
    }
}