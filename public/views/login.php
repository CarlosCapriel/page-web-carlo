<?php
    $estado_session = session_status();
    if ($estado_session == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['loggedUserName'])) {
        ?>
            <h3>No tiene permisos para entrar a la página. <h3>
 <?php
    } else {
        ?>
    <div class="flex justify-center mt-10">
        <form action="./db/validation.php" method="POST" class="bg-blue-200 w-96 h-80 shadow-2xl rounded-lg">
            <div class="flex-row m-4">
                <label for="email">Email: </label>
                <input type="email" name="email" id="">
            </div>
            <div class="flex-row m-4">
                <label for="password">Contraseña: </label>
                <input type="password" name="contrasenia">
            </div>
            <button type="submit" name="action">Iniciar sesión</button>
        </form>
    </div>
<?php
    }
?>