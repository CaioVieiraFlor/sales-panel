<?php

require 'Model.php';

class EditProductModel extends Model {
    public function getProduct($productCode) {
        $sql = "SELECT * FROM product WHERE cod = '$productCode'";
        $query = $this->pdo->query($sql);
        return $query->fetchall();
    }

    public function update($productCode, string $name, string $price, string $imageDir) {
        $sql = "UPDATE product SET nome = '$name', preco = '$price', figura = '$imageDir' WHERE cod = '$productCode'";
    
        return $this->pdo->query($sql) ? true : false;
    }
}