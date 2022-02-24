<?php require '../App/pagamFunctions.php'; ?>

<?php

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/img/fluxo-de-caixa.png" type="image/x-icon">
    <title>BoxControl - Pagamentos</title>
</head>
<body class="bg-dark">
    
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom bg-dark">
            <a href="index.php" class="d-flex align-items-center text-light text-decoration-none">
                <span class="fs-4">BoxControl</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-light text-decoration-none" href="../index.php">Home</a>
                <a class="me-3 py-2 text-light text-decoration-none" href="recebimentos.php">Recebimento</a>
                <a class="me-3 py-2 text-light text-decoration-none" href="pagamentos.php">Pagamentos</a>
                <a class="me-3 py-2 text-light text-decoration-none" href="relatorio.php">Relatórios</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="row row-cols-1 row-cols-md-1 mb-1 text-center">
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

        <h4 style="color: white; text-align: center;">New Pagamento:</h4><br>

        <form class="form-inline">
            <div class="form-group mb-2">
                <input type="text" class="form-control" id="inputPassword2" name="desc_pagamento" placeholder="Descrição do Pagamento">
            </div>
            <div class="form-group mb-2">
                <input type="text" class="form-control" id="inputPassword2" name="vlr_pagamento" placeholder="Valor do Pagamento">
            </div>
            <div class="form-group mb-2">
                <input type="date" class="form-control" id="inputPassword2" name="data_pagamento" placeholder="Data do Pagamento">
            </div>
            <br><button type="submit" class="btn btn-primary mb-2 text-center" style="display: block; margin: 0 auto;">Inserir Pagamento</button>
        </form><br>
    </main>

    <footer>
        <div class="text-center p-3 text-light">AlthDevelopment © <?php echo date('Y'); ?></div>
    </footer>

    <script src="../assets/js/main.js"></script>

</body>
</html>