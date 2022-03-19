<?php

    session_start();

    unset($_SESSION['idUserSession']);

    header("Location: ../index.php");

?>