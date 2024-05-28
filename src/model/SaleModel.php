<?php

require 'Model.php';

class SaleModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getSales() {
        $sql = "select * from venda";
        $query = $this->pdo->query($sql);
        return $query->fetchall();
    }

    // public function getProduct($productCode) {
    //     $sql = "SELECT * FROM product WHERE cod = '$productCode'";
    //     $query = $this->pdo->query($sql);
    //     return $query->fetchall();
    // }

    // public function add(string $name, string $price, int $qtd, string $imageDir) {
    //     $sql = "INSERT INTO product SET nome = '$name', preco = '$price', qtd = '$qtd', figura = '$imageDir'";
    
    //     return $this->pdo->query($sql) ? true : false;
    // }

    // public function update($productCode, string $name, string $price, int $qtd, string $imageDir) {
    //     $sql = "UPDATE product SET nome = '$name', preco = '$price', qtd = '$qtd', figura = '$imageDir' WHERE cod = '$productCode'";
    //     return $this->pdo->query($sql) ? true : false;
    // }
}