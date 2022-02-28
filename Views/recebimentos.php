<?php require ('../App/recebFunctions.php'); ?>
<?php require ('../Database/conexao.php'); ?>

<?php

    if (isset($_POST['desc_recebimento']) && isset($_POST['valor_recebimento']) && isset($_POST['data_recebimento'])) {

        function insertRecebimento() {

            global $pdo;

            $despInput = $_POST['desc_recebimento'];
            $vlrInput = $_POST['valor_recebimento'];
            $dtaInput = $_POST['data_recebimento'];
    
            if ($despInput !== NULL) {

                $sqlInsert = $pdo->prepare("INSERT INTO tb_recebimento (desc_titulo, valor_titulo, data_titulo) VALUES ('".$despInput."', ".$vlrInput.", '".$dtaInput."');");
                $sqlInsert->execute();
    
                if ($sqlInsert->rowCount() > 0) {

                    $retornoInsert = '<h6 style="color: rgb(255, 255, 255); text-align: center;">Recebimento inserido com sucesso!</h6>';
                    echo $retornoInsert;
                    header("refresh: 3; url=recebimentos.php");
                    
                } else {

                    $retornoInsert = '<h6 style="color: rgb(255, 255, 255); text-align: center;">Erro ao inserir o recebimento. Verifique!</h6>';
                    echo $retornoInsert;
                    header("refresh: 3; url=recebimentos.php");
                }

            } else {

                $retornoInsert = '<h6 style="color: rgb(255, 255, 255); text-align: center;">Erro ao inserir o recebimento. Verifique!</h6>';
                echo $retornoInsert;
                header("refresh: 3; url=recebimentos.php");

            }

        }

    }

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
    <title>BoxControl - Recebimentos</title>
</head>
<body class="bg-dark">
    
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom bg-dark">
            <a href="index.php" class="d-flex align-items-center text-light text-decoration-none">
                <span class="fs-4">BoxControl</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-light text-decoration-none" href="../index.php">Home</a>
                <a class="me-3 py-2 text-light text-decoration-none" href="recebimentos.php">Recebimentos</a>
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
        </div>

        <h4 style="color: white; text-align: center;">New Despesa:</h4><br>

        <form class="form-inline" method="POST">
            <div class="form-group mb-2">
                <input type="text" class="form-control" id="inputPassword2" name="desc_recebimento" placeholder="Descrição do Recebimento" required>
            </div>
            <div class="form-group mb-2">
                <input type="text" class="form-control" id="inputPassword2" name="valor_recebimento" placeholder="Valor do Recebimento" required>
            </div>
            <div class="form-group mb-2">
                <input type="date" class="form-control" id="inputPassword2" name="data_recebimento" value="<?php echo date("Y-m-d") ?>" required>
            </div>
            <br><button type="submit" class="btn btn-primary mb-2 text-center" style="display: block; margin: 0 auto;">Inserir Recebimento</button>
        </form><br>

        <div class="retorno">
            <?php if (isset($_POST['desc_recebimento']) && isset($_POST['valor_recebimento']) && isset($_POST['data_recebimento'])) { echo insertRecebimento(); } ?>
        </div>
    </main>

    <footer>
        <div class="text-center p-3 text-light">AlthDevelopment © <?php echo date('Y'); ?></div>
    </footer>

    <script src="../assets/js/main.js"></script>

</body>
</html>