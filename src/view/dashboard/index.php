<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Aula_09 - PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-2.32.0.min.js" charset="utf-8"></script>
</head>

<body>

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
        <div id='myDiv' data-products="<?= $products ?>">
            <!-- Plotly chart will be drawn inside this DIV -->
        </div>
    </div>

    <script>
        let productsQty = '<?= count($products); ?>';
        console.log(products);

        var trace1 = {
            x: ['Zebras', 'Lions', 'Pelicans'],
            y: [90, 40, 60],
            type: 'bar',
            name: 'New York Zoo'
        };

        var data = [trace1];

        var layout = {
            title: 'Vendas',
            showlegend: true
        };

        Plotly.newPlot('myDiv', data, layout, {
            displayModeBar: false
        });
    </script>

</body>

</html>