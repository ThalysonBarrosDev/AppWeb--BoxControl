<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoxControl - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="shortcut icon" href="Assets/img/fluxo-de-caixa.png" type="image/x-icon">
    <script src="Assets/js/main.js"></script>
</head>
<body class="bg-dark">
    
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom bg-dark">
            <a href="index.php" class="d-flex align-items-center text-light text-decoration-none">
                <span class="fs-4">BoxControl</span>
            </a>
        </div>
    </header>

    <main>
        <form class="form" action="Views/logar.php" method="POST">
            <div class="card">
                <div class="card-top">
                    <img class="imglogin" src="Assets/img/user.png" alt="Usuário">
                </div>

                <div class="card-group">
                    <input type="email" name="inputEmail" placeholder="E-mail" required>
                </div>

                <div class="card-group">
                    <input type="password" name="inputPassword" placeholder="Senha" required>
                </div>

                <div class="card-group btn">
                    <button type="submit">Acessar</button>
                </div>
            </div>
        </form>
    </main>

    <footer>
        <div class="text-center p-3 text-light" style="margin-top: 25px;"><a href="https://www.althdevelopment.com" target="_blank">AlthDevelopment</a> © <?php echo date('Y'); ?></div>
    </footer>

</body>
</html>