<?php
if (!isset($_GET['menu'])) {
    echo '<script>window.location.href="../../index.php?menu=401"</script>';
// <!-- <h3>No tiene permisos para entrar a la página. <h3> -->
} else {
    $email=$_POST['email'];
    $contrasenia=$_POST['contrasenia'];
    require_once "conexion.php";

    $conexion = new Conexion;

    $consulta = "SELECT * FROM login where email='$email' and contrasenia='$contrasenia'";
    if ($sql = $conexion->obtenerDatos($consulta)) {
        session_start();
        $_SESSION['loggedUserName'] = $sql[0]['email'] ;
        $_SESSION['nombre'] = $sql[0]['nombre'];
        header("location:../index.php?menu=iniciologeado");
    } else {
        echo '<script>alert("Error, correo o contraseña incorrectos");window.location.href="../index.php?menu=login"</script>';
    }
}
