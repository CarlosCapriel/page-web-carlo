<?php
    $estado_session = session_status();
    if ($estado_session == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['loggedUserName']) || !isset($_GET['menu'])) {
        echo '<script>window.location.href="../../index.php?menu=401"</script>';
    // <!-- <h3>No tiene permisos para entrar a la página. <h3> -->
    } else {
        ?>
    <div class="flex justify-center mt-10">
        <form action="./db/validation.php" method="POST" 
        class="bg-blue-200 w-96 h-80 shadow-2xl rounded-lg">
            <div class="m-4 mt-8">
                <label for="email" class="mr-4 flex flex-row">Email: </label>
                <input type="email" name="email" class="p-1 flex flex-row rounded-lg w-full">
            </div>
            <div class="m-4 mt-8">
                <label for="contrasenia" class="flex flex-row mr-4">Contraseña: </label>
                <input type="password" name="contrasenia" class="w-full p-1 rounded-lg flex flex-row">
            </div>
            <button type="submit" name="action" class="bg-blue-500 text-blue-100 
                    rounded-lg py-2 px-4 ml-4 mt-10 hover:bg-blue-400">
                Iniciar sesión
            </button>
        </form>
    </div>
<?php
    }
?>