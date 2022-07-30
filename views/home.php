<?php require('../events/check.php'); require('../config/config.php'); if (isset($_SESSION['idUserSession']) && !empty($_SESSION['idUserSession'])) : ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Box Control - Home</title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/home.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../assets/img/fluxo-de-caixa.png" type="image/x-icon">
    </head>
    <body class="bg-dark">
        <header class="header">
            <div class="soon">
                <a href="index.php">Box Control</a>
            </div>

            <div class="nav">
                <a><?php echo 'Olá, ' . $name_logged; ?></a>
                <a class="btn btn-danger" href="../events/logout.php">Sair</a>
            </div>
        </header>

        <main class="content">
            <div class="d-flex nav-center justify-content-around">
                <a class="btn btn-success" href="home.php">Home</a>
                <a class="btn btn-success" href="">Titulos a Pagar</a>
                <a class="btn btn-success" href="">Titulos a Receber</a>
                <a class="btn btn-success" href="">Relatórios</a>
                <a class="btn btn-success" href="">Logs</a>
            </div>

            <div class="home-infos text-center">
                <div class="card">
                    <div class="card-header">Informação Mensal</div>
                    <div class="card-body">
                        <h5 class="card-title">Total: R$ 0,00</h5>
                        <p class="card-text">Maior titulo a pagar: R$ 0,00</p>
                        <p class="card-text">Maior titulo a receber: R$ 0,00</p>
                        <p class="card-text">Total de titulos no mês: 1</p>
                        <p class="card-text">Média diaria de valores: R$ 100,00</p>
                    </div>
                </div>
            </div>
        </main>

        <footer class="footer">
            <a href="https://althdevelopment.com">Althdevelopment &copy; <?= date('Y'); ?></a>
        </footer>
        
        <script src="../assets/js/main.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>

<?php else : header("Location: ../index.php"); endif; ?>