<?php

require 'Model.php';

class SaleModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getSales() {
        $sql = "
            select 
                p.nome,
                pv.qtd,
                p.preco,
                v.data     
            from produto_venda pv 
            join produto p on p.cod = pv.cod_produto 
            join venda v on v.cod = pv.cod_venda
        ";
        $query = $this->pdo->query($sql);
        return $query->fetchall();
    }

    public function getProduct(string $productCode) {
        $sql = "SELECT * FROM produto WHERE cod = '$productCode'";
        $query = $this->pdo->query($sql);
        return $query->fetchall();
    }

    public function add(string $price, $date) {
        $formattedDate = date('Y-m-d', strtotime($date));

        $sql = "INSERT INTO venda SET preco = :price, data = :date";
        
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':price', $price);
        $stmt->bindValue(':date', $formattedDate);
        $stmt->execute();
    
        $saleCode = $this->pdo->lastInsertId();
        
        return $saleCode ? $saleCode : false;
    }

    public function addProductSale(string $saleCode, string $productCode, int $qty) {
        $sql = "INSERT INTO produto_venda SET cod_venda = :saleCode, cod_produto = :productCode, qtd = :qty";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':saleCode', $saleCode);
        $stmt->bindValue(':productCode', $productCode);
        $stmt->bindValue(':qty', $qty);
    
        return $stmt->execute() ? true : false;
    }

    public function updateProduct(int $qty, string $productCode) {
        $sql = "UPDATE produto SET qtd = qtd - :qty WHERE cod = :productCode";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':qty', $qty);
        $stmt->bindValue(':productCode', $productCode);

        return $stmt->execute() ? true : false;
    }
}