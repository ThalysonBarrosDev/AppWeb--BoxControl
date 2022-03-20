<?php

  require ('../Database/conexao.php');
  require ('../App/Model/Usuario.php');
  require ('../App/Model/FlashMessage.php');

  if(isset($_POST['inputEmail']) && !empty($_POST['inputEmail']) && isset($_POST['inputPassword']) && !empty($_POST['inputPassword'])) {

    $userClass = new Usuario();
    $email = addslashes($_POST['inputEmail']);
    $senha = addslashes($_POST['inputPassword']);

    if ($userClass->validaLogin($email, $senha) == TRUE) {

      if (isset($_SESSION['idUserSession'])) {

        $flashMessage = new flashMessage();
        $flashMessage->setMessage("Login realizado com sucesso.", 'success');

        header("Refresh:2; url=../events/home.php");

      } else {

        header("Location: ../index.php");  

      }

    } else {

      $flashMessage = new flashMessage();
      $flashMessage->setMessage("Dados de login incorretos, verifique.", 'error');

      header("Refresh:2; url=../index.php");

    };

  } else {

    $flashMessage = new flashMessage();
    $flashMessage->setMessage("Erro ao realizar o login.", 'error');

    header("Refresh:2; url=../index.php");   

  }

?>

<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BoxControl - Validação</title>
    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/img/fluxo-de-caixa.png" type="image/x-icon">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  </head>

  <body style="padding:30px; background-color:#f2f4f6 !important;">

    <div class="row" style="padding:60px;">
      <div class="col-md-1"></div>
      <div class="col-md-1"></div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script> <?php $flashMessage->printMessage(); ?> </script>

  </body>
</html>