<?php

require 'Controller.php';
require PATH_MODEL . '/AddProductModel.php';

class AddProductController extends Controller {
    public static function index() {
        $addProductModel = new AddProductModel();

        session_start();

        try {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = isset($_POST['nome']) ? $_POST['nome'] : '';
                $price = isset($_POST['preco']) ? $_POST['preco'] : '';
                $image = isset($_FILES['figura']) ? $_FILES['figura'] : '';
    
                if (empty($name) OR empty($price) OR empty($image)) {
                    throw new Exception('Informações insuficientes para cadastro de produto, tente novamente.', 400);
                }
    
                $name = addslashes($name);
                $price = addslashes($price);
                
                $dir = str_replace('\\', '/', PATH_ASSETS . 'img/');
                $extension = strtolower(pathinfo($_FILES['figura']['name'], PATHINFO_EXTENSION));
                $imageName = md5(time()) . '.' . $extension;
                $imageDir = $dir . $imageName;
                if (!move_uploaded_file($_FILES['figura']['tmp_name'], $imageDir)) {
                    throw new Exception('Não foi possível salvar a imagem, tente novamente.', 400);
                }
    
                $result = $addProductModel->add($name, $price, $imageDir);
                if (!$result) {
                    throw new Exception('O cadastro falhou!', 400);
                }
    
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT='0; URL=ProductController.php'>
                    <script type=\"text/javascript\">
                    alert(\"Produto cadastrada com sucesso!\");
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

        require PATH_VIEW . 'product/add.php';
    }
}

AddProductController::index();