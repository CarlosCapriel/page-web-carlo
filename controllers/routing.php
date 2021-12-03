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
            case 'css3':
                header("location: https://developer.mozilla.org/es/docs/Web/CSS");
                break;
            case 'html5':
                header("location: https://developer.mozilla.org/es/docs/Glossary/HTML5");
                    break;
            case 'tailwind':
                header("location: https://tailwindcss.com");
                break;
            case 'php':
                header("location: https://www.php.net/manual/es/intro-whatis.php");
                break;
            case 'gal':
                require_once('./public/views/galeria.php');
                break;
            default:
                require_once('./public/views/home.php');
        }
    }
