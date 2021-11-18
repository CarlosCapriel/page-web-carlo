<?php
    if (!isset($_GET['menu'])) {
        echo '<script>window.location.href="../../index.php?menu=401"</script>';
    // <!-- <h3>No tiene permisos para entrar a la página. <h3> -->
    } else {
        ?>
<div class="py-24 flex items-center justify-center">
    <div class="bg-blue-200 rounded-lg shadow-2x1 w-1/5">
        <img src="public/images/php_logo.png" alt="" 
                class="rounded-t-lg h-48 w-full">
        <h2 class="text-x1 font-extrabold px-8">PHP</h2>
        <div class="pl-8 pr-8 pb-8">
            <p class="truncate">PHP (acrónimo recursivo de PHP: Hypertext Preprocessor) es un 
                lenguaje de código abierto muy popular especialmente adecuado 
                para el desarrollo web y que puede ser incrustado en HTML.</p>
            <button class="bg-blue-500 text-blue-100 rounded-lg py-2 px-4 mt-5">
                Ver más
            </button>
        </div>
    </div>
</div>

<?php
    }
?>