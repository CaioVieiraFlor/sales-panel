<?php

require 'Controller.php';
require PATH_MODEL . '/AddPizzaModel.php';

class AddPizzaController extends Controller {
    public static function index() {
        $addPizzaModel = new AddPizzaModel();
        $pdo = $addPizzaModel->getConnection();

        session_start();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Verifica se o formulário não veio vazio
            if (isset($_POST['nome']) && !empty($_POST['nome']) &&
                isset($_POST['preco']) && !empty($_POST['preco']) &&
                isset($_FILES['figura'])
            ) 
            {
                $nome = addslashes($_POST['nome']);
                $preco = addslashes($_POST['preco']);
                
                $diretorio = PATH_ASSETS . 'img';
    
                $extensao = strtolower(substr($_FILES['figura']['name'], -4));
                $novo_nome = md5(time()) . $extensao;
    
                if (move_uploaded_file($_FILES['figura']['tmp_name'], $diretorio . $novo_nome)) {
                    $caminhoImagem = $diretorio . $novo_nome;
    
                    $result = $addPizzaModel->add($nome, $preco, $caminhoImagem);
                    if (!$result) {
                        echo "
                            <META HTTP-EQUIV=REFRESH CONTENT='0; URL=HomeController.php'>
                            <script type=\"text/javascript\">
                            alert(\"Falha ao cadastrar!\");
                            </script>
                        ";
                    }

                    echo "
                        <META HTTP-EQUIV=REFRESH CONTENT='0; URL=PizzaController.php'>
                        <script type=\"text/javascript\">
                        alert(\"Pizza cadastrada com sucesso!\");
                        </script>
                    ";
                }
                        
            } else {
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT='0; URL=pizza.php'>
                    <script type=\"text/javascript\">
                    alert(\"O cadastro falhou!\");
                    </script>
                ";
            }
        }

        require PATH_VIEW . 'pizza/add.php';
    }
}

AddPizzaController::index();