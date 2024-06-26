<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Aula_09 - PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

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

        <div class="ms-auto me-3">
            <span class="text-light"><?= $nome ?></span>
        </div>

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

<div class="mt-4 p-5 bg-secondary text-white rounded">
    <h1>Seja bem-vindo!</h1>
</div>

</body>
</html>