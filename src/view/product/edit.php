<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Editar produto</title>
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

    <div class="d-flex justify-content-center mt-5">
        <form action="<?= DIR_CONTROLLER . 'EditProductController?cod=' . $product['cod']; ?>" method="post" enctype="multipart/form-data" style="max-width: 500px; width: 100%;" class="bg-light mx-auto border border-2 p-4">
            <h2>EDITAR PRODUTO</h2>
            <hr class="my-3">
            <div class="mb-3">
                <label class="form-label fw-bold">Nome:</label>
                <input type="text" class="form-control" placeholder="Nome do Produto" name="nome" value="<?= $product['nome']; ?>" required>
            </div>

            <div class="mb-3 mt-3">
                <label class="form-label fw-bold">Valor:</label>
                <input type="text" class="form-control" placeholder="Entre com o valor" name="preco" value="<?= $product['preco']; ?>" required>
            </div>

            <div class="mb-3 mt-3">
                <label class="form-label fw-bold">Quantidade:</label>
                <input type="number" class="form-control" placeholder="Entre com a quantidade" name="qtd" value="<?= $product['qtd']; ?>" required>
            </div>

            <div class="mb-3 mt-3">
                <label class="form-label fw-bold">Imagem:</label>
                <input type="file" name="figura" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-dark">Cadastrar</button>
        </form>
    </div>
</body>

</html>