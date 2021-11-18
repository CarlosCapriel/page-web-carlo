<?php
    $estado_session = session_status();
    if ($estado_session == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['loggedUserName'])) {
        ?>
        <!-- Logeado -->
        <nav class="bg-gray-700 text-blue-100">
            <ul class="flex flex-row">
                <li class="ml-8 pr-8 hover:bg-gray-800 p-4"><a href="?menu=inicio">Inicio</a></li>
                <li class="pr-8 hover:bg-gray-800 p-4"><a href="?menu=logout">Logout</a></li>
                <li class="pr-8 hover:bg-gray-800 p-4"><a href="?menu=tecnos">Tecnologias</a></li>
            </ul>
        </nav>
<?php
    } else {
        ?>
    <nav class="bg-gray-700 text-blue-100">
        <ul class="flex flex-row">
            <li class="ml-8 pr-8 hover:bg-gray-800 p-4"><a href="?menu=inicio">Inicio</a></li>
            <li class="pr-8 hover:bg-gray-800 p-4"><a href="?menu=login">Login</a></li>
            <li class="pr-8 hover:bg-gray-800 p-4"><a href="?menu=tecnos">Tecnologias</a></li>
        </ul>
    </nav>
<?php
    }
?>
