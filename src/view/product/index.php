<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Produtos dos simpaticos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-secondary" style="min-height: 100vh;">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= DIR_CONTROLLER . 'HomeController.php'; ?>">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?= DIR_CONTROLLER . 'ProductController.php' ?>">PRODUTOS</a>
            </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-3">
        <h2 class="text-white">Produto -
            <a href="<?= DIR_CONTROLLER . 'AddProductController.php' ?>" class="btn btn-dark btn-sm">Novo Produto</a>
        </h2>       
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($products as $product) {
                        echo '<tr>';
                            echo '<td>'.$product['nome'].'</td>';
                            echo '<td>'.$product['preco'].'</td>';
                            echo '<td><img src="' . $product['figura'] . '" alt="Imagem do produto" style="max-width: 100px; max-height: 100px;"></td>';
                            echo '<td>
                                    <a href="' . DIR_CONTROLLER . 'EditProductController?cod=' . $product['cod'] . '">Editar</a> 
                                    - 
                                    <a href="' . DIR_CONTROLLER . 'DeleteProductController?cod=' . $product['cod'] . '">Excluir</a>
                                  </td>';
                        echo '<tr>';            
                    }
                ?>
            </tbody>
        </table>
    </div>
  
</body>
</html>