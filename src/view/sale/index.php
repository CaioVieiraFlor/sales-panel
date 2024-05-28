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
        <h2 class="text-white">Venda -
            <a href="<?= DIR_CONTROLLER . 'AddVendaController.php' ?>" class="btn btn-dark btn-sm">Nova venda</a>
        </h2>       
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th>Preço</th>
                <th>Qtd</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($sales as $sale) {
                        echo '<tr>';
                            echo '<td>'.$sale['preco'].'</td>';
                            echo '<td>'.$sale['qtd'].'</td>';
                            echo '<td>
                                    <a href="' . DIR_CONTROLLER . 'EditProductController?cod=' . $sale['cod'] . '">Editar</a> 
                                    - 
                                    <a href="' . DIR_CONTROLLER . 'DeleteProductController?cod=' . $sale['cod'] . '">Excluir</a>
                                  </td>';
                        echo '<tr>';            
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>