<?php

require 'Model.php';

class DeleteProductModel extends Model {
    public function delete(string $code) {
        $sql = "DELETE FROM product WHERE cod = '$code'";
    
        return $this->pdo->query($sql) ? true : false;
    }
}