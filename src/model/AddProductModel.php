<?php

require 'Model.php';

class AddProductModel extends Model {
    public function add(string $name, string $price, string $imageDir) {
        $sql = "INSERT INTO product SET nome = '$name', preco = '$price', figura = '$imageDir'";
    
        return $this->pdo->query($sql) ? true : false;
    }
}