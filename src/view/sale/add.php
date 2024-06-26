<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Adicionar novo produto</title>
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
                    <a class="nav-link active" href="<?= DIR_CONTROLLER . 'DashboardController.php'; ?>">DASHBOARD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= DIR_CONTROLLER . 'ProductController.php' ?>">PRODUTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= DIR_CONTROLLER . 'SaleController.php' ?>">VENDA</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="d-flex justify-content-center mt-5">
        <form action="<?= DIR_CONTROLLER . 'addSaleController.php?cod=' . $product['cod'] . '' ?>" method="post" enctype="multipart/form-data" style="max-width: 500px; width: 100%;" class="bg-light mx-auto border border-2 p-4">
            <h2>CADASTRO DE VENDA</h2>
            <hr class="my-3">
            <div class="mb-3">
                <label class="form-label fw-bold">Nome:</label>
                <input type="text" class="form-control" value="<?= $product['nome'] ?>" name="nome" readonly>
            </div>

            <div class="mb-3 mt-3">
                <label class="form-label fw-bold">Valor:</label>
                <input type="text" class="form-control" value="<?= $product['preco'] ?>" name="preco" readonly>
            </div>

            <div class="mb-3 mt-3">
                <label class="form-label fw-bold">Qtd:</label>
                <input type="number" class="form-control" placeholder="Entre com a quantidade" name="qtd" max="<?= $product['qtd'] ?>" required>
            </div>

            <div class="mb-3 mt-3">
                <label class="form-label fw-bold">Imagem:</label>
                <img src="<?= $product['figura'] ?>" alt="Imagem do produto" style="max-width: 100px; max-height: 100px;">
            </div>

            <button type="submit" class="btn btn-dark">Comprar</button>
        </form>
    </div>
</body>

</html>