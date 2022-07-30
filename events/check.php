<?php

    require('../config/config.php');

    if (isset($_SESSION['idUserSession']) && !empty($_SESSION['idUserSession'])) {

        $user = new User();
        $user_logged = $user->loggedUser($_SESSION['idUserSession']);
        $name_logged = $user_logged['name'];

    } else {

        header('Location: ../index.php');
        
    }

?>