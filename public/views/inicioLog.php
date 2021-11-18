<?php
    $estado_session = session_status();
    if ($estado_session == PHP_SESSION_NONE) {
        session_start();
    }
    if (!isset($_SESSION['loggedUserName']) || !isset($_GET['menu'])) {
        echo '<script>window.location.href="../../index.php?menu=401"</script>';
    // <!-- <h3>No tiene permisos para entrar a la página. <h3> -->
    } else {
        ?>
    <h1>
        Inicio de sesión exitoso
    </h1>
<?php
    }
?>