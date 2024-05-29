<?php

require 'Controller.php';
require PATH_MODEL . '/SaleModel.php';

class AddSaleController extends Controller {
    public static function index() {
        session_start();

        try {
            $saleModel = new SaleModel();

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_GET['cod'])) {
                $name = isset($_POST['nome']) ? $_POST['nome'] : '';
                $price = isset($_POST['preco']) ? $_POST['preco'] : '';
                $qty = isset($_POST['qtd']) ? intval($_POST['qtd']) : 0;
                $date = date('d-m-Y');
    
                if (empty($name) OR empty($price) OR empty($qty)) {
                    throw new Exception('Informações insuficientes para cadastro de venda, tente novamente.', 400);
                }
    
                $name = addslashes($name);
                $price = addslashes($price);
    
                $saleCode = $saleModel->add($price, $date);
                if (!$saleCode) {
                    throw new Exception('O cadastro falhou!', 400);
                }

                $result = $saleModel->addProductSale($saleCode, $_GET['cod'], $qty);
                if (!$result) {
                    throw new Exception('O cadastro falhou!', 400);
                }

                $updateProductQty = $saleModel->updateProduct($qty, $_GET['cod']);
                if (!$updateProductQty) {
                    throw new Exception('Não foi possível atualizar a quantidade do produto!', 400);
                }
    
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT='0; URL=SaleController.php'>
                    <script type=\"text/javascript\">
                    alert(\"Venda cadastrada com sucesso!\");
                    </script>
                ";
            }

            if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['cod'])) {
                $product = $saleModel->getProduct($_GET['cod'])[0];
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