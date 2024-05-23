<?php

require 'Model.php';

class PizzaModel extends Model {
    public function getPizzas() {
        $sql = "select * from pizza";
        return $this->pdo->query($sql);
    }
}