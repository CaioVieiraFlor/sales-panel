<?php

require 'Model.php';

class DashboardModel extends Model
{
    public function getProducts()
    {
        $sql = "
                SELECT 
                p.nome,
                SUM(pv.qtd) AS total_qtd,
                p.preco,
                v.data
            FROM 
                produto_venda pv 
                JOIN produto p ON p.cod = pv.cod_produto 
                JOIN venda v ON v.cod = pv.cod_venda
            GROUP BY 
                p.nome, p.preco, v.data
            LIMIT 6;
        ";
        $query = $this->pdo->query($sql);
        return $query->fetchall();
    }
}
