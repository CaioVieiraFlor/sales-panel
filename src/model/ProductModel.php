<?php

require 'Model.php';

class ProductModel extends Model {
    public function getProducts() {
        $sql = "select * from product";
        $query = $this->pdo->query($sql);
        return $query->fetchall();
    }
}