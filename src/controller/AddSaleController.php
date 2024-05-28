<?php

require 'Controller.php';
require PATH_MODEL . '/SaleModel.php';

class AddSaleController extends Controller {
    public static function index() {
        session_start();

        try {
            $saleModel = new SaleModel();

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = isset($_POST['nome']) ? $_POST['nome'] : '';
                $price = isset($_POST['preco']) ? $_POST['preco'] : '';
                $qtd = isset($_POST['qtd']) ? intval($_POST['qtd']) : 0;
    
                if (empty($name) OR empty($price) OR empty($qtd)) {
                    throw new Exception('Informações insuficientes para cadastro de produto, tente novamente.', 400);
                }
    
                $name = addslashes($name);
                $price = addslashes($price);
    
                // $result = $saleModel->add($name, $price, $qtd);
                // if (!$result) {
                //     throw new Exception('O cadastro falhou!', 400);
                // }
    
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT='0; URL=SaleController.php'>
                    <script type=\"text/javascript\">
                    alert(\"Produto cadastrada com sucesso!\");
                    </script>
                ";
            }

        } catch (Throwable $e) {
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT='0; URL=SaleController.php'>
                <script type=\"text/javascript\">
                alert(\"{$e->getMessage()}\");
                </script>
            ";
        }

        require PATH_VIEW . 'sale/add.php';
    }
}

AddSaleController::index();