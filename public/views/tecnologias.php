<?php
    if (!isset($_GET['menu'])) {
        echo '<script>window.location.href="../../index.php?menu=401"</script>';
    // <!-- <h3>No tiene permisos para entrar a la página. <h3> -->
    } else {
        ?>
<div class="py-24 flex items-center justify-center">
    <div class="bg-blue-200 rounded-lg shadow-2x1 w-1/5 m-5">   
        <img src="public/images/html_logo.png" alt="" 
                class="rounded-t-lg h-48 w-full">
        <h2 class="text-x1 font-extrabold px-8">HTML</h2>
        <div class="pl-8 pr-8 pb-8">
            <p class="truncate">HTML (Lenguaje de Marcas de Hipertexto, del inglés HyperText Markup Language) 
                es el componente más básico de la Web</p>
            <button class="bg-blue-500 text-blue-100 rounded-lg py-2 px-4 mt-5">
                <a href="?menu=html5" target="blank">Ver más</a>
            </button>
        </div>
    </div>
    <div class="bg-blue-200 rounded-lg shadow-2x1 w-1/5 m-5">
        <img src="public/images/php_logo.png" alt="" 
                class="rounded-t-lg h-48 w-full">
        <h2 class="text-x1 font-extrabold px-8">PHP</h2>
        <div class="pl-8 pr-8 pb-8">
            <p class="truncate">PHP (acrónimo recursivo de PHP: Hypertext Preprocessor) es un 
                lenguaje de código abierto muy popular especialmente adecuado 
                para el desarrollo web y que puede ser incrustado en HTML.</p>
            <button class="bg-blue-500 text-blue-100 rounded-lg py-2 px-4 mt-5">
                <a href="?menu=php" target="blank">Ver más</a>
            </button>
        </div>
    </div>
    <div class="bg-blue-200 rounded-lg shadow-2x1 w-1/5 m-5">
        <img src="public/images/css3_logo.png" alt="" 
                class="rounded-t-lg h-48 w-full">
        <h2 class="text-x1 font-extrabold px-8">CSS 3</h2>
        <div class="pl-8 pr-8 pb-8">
            <p class="truncate">CSS (en inglés Cascading Style Sheets) es lo que se 
                denomina lenguaje de hojas de estilo en cascada y se usa para estilizar</p>
            <button class="bg-blue-500 text-blue-100 rounded-lg py-2 px-4 mt-5">
                <a href="?menu=css3" target="blank">Ver más</a>
            </button>
        </div>
    </div>
    <div class="bg-blue-200 rounded-lg shadow-2x1 w-1/5 m-5">
        <img src="public/images/tailwindcss_logo.png" alt="" 
                class="rounded-t-lg h-48 w-full">
        <h2 class="text-x1 font-extrabold px-8">Tailwind CSS</h2>
        <div class="pl-8 pr-8 pb-8">
            <p class="truncate">Tailwind CSS es un framework CSS que permite un desarrollo ágil, 
                basado en clases de utilidad que se pueden aplicar con facilidad en el código</p>
            <button class="bg-blue-500 text-blue-100 rounded-lg py-2 px-4 mt-5">
                <a href="?menu=tailwind" target="blank">Ver más</a>
            </button>
        </div>
    </div>
</div>

<?php
    }
?>