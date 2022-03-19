<?php 

    require ('../Database/conexao.php');

    if (isset($_SESSION['idUserSession']) && !empty($_SESSION['idUserSession'])) {

        require_once ('../App/Model/Usuario.php');

        $userClass = new Usuario();
        $userLogged = $userClass->usuarioLogado($_SESSION['idUserSession']);
        $nameLogged = $userLogged['nome_usuario'];

    } else {

        header("Location: ../index.php");
    }

?>