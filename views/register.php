<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Box Control - Cadastro</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../assets/img/fluxo-de-caixa.png" type="image/x-icon">
</head>
<body class="bg-dark">
    <header class="header">
        <div class="soon">
            <a href="index.php">Box Control</a>
        </div>

        <div class="nav">
            <a href="../">Retornar ao Login</a>
        </div>
    </header>

    <main class="content">
        <div class="text-center">
            <img style="width: 150px; margin-top: 25px" src="../assets/img/fluxo-de-caixa.png" alt="Logo">
            <p class="mt-5 mb-5 text-white" style="font-size: 25px;">Box Control - Criação de Usuário</p>
        </div>

        <form method="POST" action="../events/register.php">
            <div class="form-group text-white offset-md-4">
                <label for="formGroupExampleInput">Nome:</label>
                <input type="text" class="form-control col-md-6" name="InputName" placeholder="Informe o seu nome e sobrenome">
            </div>

            <div class="form-group text-white offset-md-4">
                <label for="formGroupExampleInput">E-mail:</label>
                <input type="text" class="form-control col-md-6" name="InputEmail" placeholder="Informe o seu e-mail">
            </div>

            <div class="form-group text-white offset-md-4">
                <label for="formGroupExampleInput2">Senha:</label>
                <input type="password" class="form-control col-md-6" name="InputPassword" placeholder="Informe a sua senha">
            </div>

            <div class="col mt-5 text-center">
                <button class="btn btn-success">Criar Usuário</button>
            </div>
        </form>
    </main>

    <footer class="footer">
        <a href="https://althdevelopment.com">Althdevelopment &copy; <?= date('Y'); ?></a>
    </footer>
    
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>