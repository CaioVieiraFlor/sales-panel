<?php

require 'Model.php';

class ProductModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getProducts() {
        $sql = "select * from product";
        $query = $this->pdo->query($sql);
        return $query->fetchall();
    }

    public function getProduct($productCode) {
        $sql = "SELECT * FROM product WHERE cod = '$productCode'";
        $query = $this->pdo->query($sql);
        return $query->fetchall();
    }

    public function add(string $name, string $price, int $qtd, string $imageDir) {
        $sql = "INSERT INTO product SET nome = '$name', preco = '$price', qtd = '$qtd', figura = '$imageDir'";
    
        return $this->pdo->query($sql) ? true : false;
    }

    public function update($productCode, string $name, string $price, int $qtd, string $imageDir) {
        $sql = "UPDATE product SET nome = '$name', preco = '$price', qtd = '$qtd', figura = '$imageDir' WHERE cod = '$productCode'";
        return $this->pdo->query($sql) ? true : false;
    }
}