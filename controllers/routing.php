<?php
    $optionMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';

    switch ($optionMenu) {
        case 'login':
            require_once('./public/views/login.php');
            break;
        case 'tecnos':
            require_once('./public/views/tecnologias.php');
            break;
        case 'logout':
            $session_destroy = session_destroy();
            header("location: ./index.php?menu=inicio");
            break;
        case 'iniciologeado':
            require_once('./public/views/inicioLog.php');
            break;
        default:
            require_once('./public/views/home.php');
    }
