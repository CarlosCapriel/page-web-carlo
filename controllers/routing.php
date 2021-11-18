<?php
    if (!isset($_GET['menu'])) {
        echo '<script>window.location.href="../../index.php?menu=401"</script>';
    // <!-- <h3>No tiene permisos para entrar a la página. <h3> -->
    } else {
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
            case '401':
                require_once('./public/views/401.php');
                break;
            default:
                require_once('./public/views/home.php');
        }
    }
