<?php

require 'Controller.php';
require PATH_MODEL . '/ProductModel.php';

class DeleteProductController extends Controller {
    public static function index() {
        $productModel = new ProductModel();

        session_start();

        try {
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['cod'])) {
                $productSaleResult = $productModel->productSaleDelete($_GET['cod']);
                if (!$productSaleResult) {
                    throw new Exception('Não foi possível excluir esse produto, tente novamente.', 400);
                }
                
                $result = $productModel->delete($_GET['cod']);
                if (!$result) {
                    throw new Exception('Não foi possível excluir esse produto, tente novamente.', 400);
                }

                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT='0; URL=ProductController.php'>
                    <script type=\"text/javascript\">
                    alert(\"Produto excluido com sucesso!\");
                    </script>
                ";
            }

        } catch (Throwable $e) {
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT='0; URL=ProductController.php'>
                <script type=\"text/javascript\">
                alert(\"{$e->getMessage()}\");
                </script>
            ";
        }
    }
}

DeleteProductController::index();