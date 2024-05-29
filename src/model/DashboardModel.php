<?php

require 'Model.php';

class DashboardModel extends Model {
    public function getProducts() {
        $sql = "select * from produto";
        $query = $this->pdo->query($sql);
        return $query->fetchall();
    }
}