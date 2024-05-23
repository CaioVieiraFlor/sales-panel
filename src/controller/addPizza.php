<?php
require '../../config.php';
require '../../config/constants.php';

session_start();

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

        $sql = "INSERT INTO pizza SET nome = '$nome', preco = '$preco', figura = '$caminhoImagem'";

        if ($pdo->query($sql)) {
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT='0; URL=pizza.php'>
                <script type=\"text/javascript\">
                alert(\"Pizza cadastrada com sucesso!\");
                </script>
            ";
        } else {
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT='0; URL=home.php'>
                <script type=\"text/javascript\">
                alert(\"Falha ao cadastrar!\");
                </script>
            ";
        }
    }
            
} else {
    echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0; URL=pizza.php'>
        <script type=\"text/javascript\">
        alert(\"O cadastro falhou!\");
        </script>
    ";
}