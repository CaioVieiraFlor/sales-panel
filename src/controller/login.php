<?php

require '../../config.php';
require '../../config/constants.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {    
    if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
    
        $sql = $pdo->query("SELECT * FROM user WHERE email = '$email' AND senha = '$senha' ");
        if ($sql->rowCount() > 0) {
            $dados = $sql->fetch();
            $_SESSION['id'] = $dados['id'];
            $_SESSION['nome'] = $dados['nome'];
            $_SESSION['email'] = $dados['email'];
    
            $homePage = DIR_VIEW . 'home/index.php';
            header("Location: $homePage");
            exit();
        } else {
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
                <script type=\"text/javascript\">
                    alert(\"Erro: Login ou senha incorreta!\");
                </script>
            ";
            exit();
        }
    }
}