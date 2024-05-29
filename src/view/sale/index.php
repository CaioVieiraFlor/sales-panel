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
                    <a class="nav-link active" href="<?= DIR_CONTROLLER . 'HomeController.php'; ?>">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= DIR_CONTROLLER . 'DashboardController.php'; ?>">DASHBOARD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= DIR_CONTROLLER . 'ProductController.php' ?>">PRODUTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= DIR_CONTROLLER . 'SaleController.php' ?>">VENDA</a>
                </li>
            </ul>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="<?= DIR_CONTROLLER . 'LogoutController.php'; ?>">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <h2 class="text-white">Venda</h2>       
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Qtd</th>
                <th>Preço</th>
                <th>data</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($sales as $sale) {
                        echo '<tr>';
                            echo '<td>'.$sale['nome'].'</td>';
                            echo '<td>'.$sale['qtd'].'</td>';
                            echo '<td>'.$sale['preco'].'</td>';
                            echo '<td>'.$sale['data'].'</td>';
                        echo '<tr>';            
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>