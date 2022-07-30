<?php

    require_once('../config/config.php');

    if (isset($_POST['InputEmail']) && !empty($_POST['InputEmail']) && isset($_POST['InputPassword']) && !empty($_POST['InputPassword'])) {

        $user = new User();
        $name = addslashes($_POST['InputName']);
        $mail = addslashes($_POST['InputEmail']);
        $pass = addslashes($_POST['InputPassword']);

        $verify_create_user = $user->validateCreateUser($mail);

        if ($verify_create_user == TRUE) {

            $flash_message = new FlashMessage();
            $flash_message->setMessage("Usuário já existente, verifique!", 'error');

            header("Refresh:2; url=../views/register.php");
            
        } else {

            $code = (int) $user->getLastCodeUser() + 1;

            if ($user->createUser($code, $name, $mail, $pass) == TRUE) {

                $flash_message = new FlashMessage();
                $flash_message->setMessage("Usuário criado com sucesso!", 'success');

                header("Refresh:2; url=../");

            } else {

                $flash_message = new FlashMessage();
                $flash_message->setMessage("Erro ao criar usuário, verifique!", 'error');

                header("Refresh:2; url=../views/register.php");
                
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Box Control - Criação de Usuário</title>
    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../assets/img/fluxo-de-caixa.png" type="image/x-icon">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>

<body style="padding:30px; background-color:#212529 !important;">
    <div class="row" style="padding:60px;">
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        <?php $flash_message->printMessage(); ?>
    </script>
</body>

</html>