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
        <div class="mt-10 ml-10 mr-10 bg-blue-200 rounded-lg h-full">
            <div class="pt-10 m-10 flex flex-row">
                <img src="public/images/me2.jpg" class="w-60 h-60 mr-10 rounded-lg shadow-lg">
                <div>
                    <h2 class="text-2xl">Carlos A. Capriel Gabriel</h2>
                    <p class="py-4 text-justify">Originario del estado de Campeche, nacido en un pueblo pequeño llamado Santo Domingo Keste.
                    Carlos A. Capriel Gabriel crecí y fui criado en una familia humilde, soy ultimo de 6 hermanos.
A la edad de 6 años ayudaba a mi papá en las labores del campo los fines de semana, me considero un afortunado de 
solo trabajar los fines de semana ya que en normalidad a la edad y en algunos casos hoy en día la mayoría de los
niños ayudan a sus papas de lunes a viernes, mi papá junto a mi mamá siempre se preocuparon por  la educación de nosotros, 
pasamos momentos difíciles pero material de la escuela nunca nos faltó tal vez no vivimos de lujo pero sin duda alguna agradezco 
a mis padres por haberse privado de esos lujos, me toco ver a compañero como salían de la escuela con el argumento
de “no hay dinero” la realidad aunque yo pequeño me daba cuenta que sus padres sencillamente no apoyaban la educación
 de sus hijos no querían gastar ese dinero en la escuela.<br>
Desde pequeño siempre me ha gustado los deportes especialmente el futbol, recuerdo como jugábamos todos mis amigos
de la infancia en la calle con el balón todas las tardes hasta la noche, lamentablemente el tiempo pasa y nosotros
crecemos.<br>
En la primaria me fue relativamente bien obtuve 4 diplomas (no sé por qué), obtuve el 4to lugar a nivel estatal 
en competencias de atletismo, junto a esto recuerdo otras cosas que por simpleza no mencionaré.
<br>
La secundaria no la estudie en mi pueblo, aunque había telesecundaria a mis papás no le parecía la idea de
 estudiar en ella ya que contaba con mala fama y como todos mis hermanos estudie en la escuela secundaria gral.
11 de un pueblo vecino llamado Sihochac, estuvo por 3 años en un albergue donde me quedaba entre semana, al
 principio fue algo intimidante ya que consideraba que yo provenía de una primaria con menor nivel (y así es)
  pero con mucho esfuerzo pude emparejar a los compañeros que provenían de una primaria con mejor nivel.<br>
Actualmente estoy estudiando la carrera de Ing. En Sistemas computacionales.<br>

                    </p>
                </div>
            </div>
        </div>
<?php
    }
?>