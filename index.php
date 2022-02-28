<?php require ('App/geralFunctions.php'); ?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/fluxo-de-caixa.png" type="image/x-icon">
    <title>BoxControl - Home</title>
</head>
<body class="bg-dark">
    
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom bg-dark">
            <a href="index.php" class="d-flex align-items-center text-light text-decoration-none">
                <span class="fs-4">BoxControl</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-light text-decoration-none" href="index.php">Home</a>
                <a class="me-3 py-2 text-light text-decoration-none" href="views/recebimentos.php">Recebimentos</a>
                <a class="me-3 py-2 text-light text-decoration-none" href="views/pagamentos.php">Pagamentos</a>
                <a class="me-3 py-2 text-light text-decoration-none" href="views/relatorio.php">Relatórios</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="row row-cols-1 row-cols-md-1 mb-1 text-center">
            <div class="col">
                <div class="card mb-1 rounded-2 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Geral</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title <?php if (valorTotalRecebimentoMes() > valorTotalPagamentosMes()) { echo "text-success"; } elseif (valorTotalRecebimentoMes() < valorTotalPagamentosMes()) { echo "text-danger"; } ?>">R$ <?= valorTotalMes() ?></h1>
                        <ul class="list-unstyled mt-1 mb-1">
                            <li>Transações (Mês): <?= totalTransacoesMes() ?></li>
                            <li>Maior Titulo: R$ <?= maiorTitulo() ?></li>
                            <li>Menor Titulo: R$ <?= menorTitulo() ?></li>
                            <li>Periodo: <?= periodoAtual() ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row row-cols-1 row-cols-md-2 mb-2 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Recebimentos</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title text-success">R$ <?= valorTotalRecebimentoMes() ?></h1>
                        <ul class="list-unstyled mt-2 mb-3">
                            <li>Titulos (Mês): <?= totalRecebimentosMes() ?></li>
                            <li>Periodo: <?= periodoAtual() ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Pagamentos</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title text-danger">R$ <?= valorTotalPagamentosMes() ?></h1>
                        <ul class="list-unstyled mt-2 mb-3">
                            <li>Titulos (Mês): <?= totalPagamentosMes() ?></li>
                            <li>Periodo: <?= periodoAtual() ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <div class="text-center p-3 text-light">AlthDevelopment © <?php echo date('Y'); ?></div>
    </footer>

    <script src="assets/js/main.js"></script>

</body>
</html>