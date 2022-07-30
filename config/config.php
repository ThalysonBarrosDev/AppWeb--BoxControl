<?php

    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

    session_start();

    error_reporting(E_ERROR);

    require_once('../vendor/autoload.php');
    require_once('../app/User.class.php');
    require_once('../app/FlashMessage.class.php');
    require_once('../database/Database.class.php');

?>