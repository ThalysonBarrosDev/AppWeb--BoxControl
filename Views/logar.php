<?php

    require ('../Database/conexao.php');
    require ('../App/Model/Usuario.php');

    if(isset($_POST['inputEmail']) && !empty($_POST['inputEmail']) && isset($_POST['inputPassword']) && !empty($_POST['inputPassword'])) {

        $userClass = new Usuario();
        $email = addslashes($_POST['inputEmail']);
        $senha = addslashes($_POST['inputPassword']);

        if ($userClass->validaLogin($email, $senha) == TRUE) {

            if (isset($_SESSION['idUserSession'])) {

                header("Location: ../events/home.php");

            } else {

                header("Location: ../index.php");

            }

        } else {

            header("Location: ../index.php");

        };

    } else {

        header("Location: ../index.php");    

    }

?>