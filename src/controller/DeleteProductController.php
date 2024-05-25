<?php

require 'Controller.php';
require PATH_MODEL . '/DeleteProductModel.php';

class DeleteProductController extends Controller {
    public static function index() {
        $deleteProductModel = new DeleteProductModel();

        session_start();

        try {
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['cod'])) {
                $result = $deleteProductModel->delete($_GET['cod']);
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