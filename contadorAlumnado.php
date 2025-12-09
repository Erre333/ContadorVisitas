<?php
date_default_timezone_set('Europe/Madrid');

$fecha=date("d/m/Y H:i:s");

//función isset se usa para verificar si una variable está definida y su
//valor no es NULL. La función isset devuelve true si la variable está
//definida y no es nula
if(isset($_COOKIE["visita"])){

    list($numVisites, $ultimaVisita) = explode("|", $_COOKIE["visita"]);
    $numVisites++;

    print "<h2> Hola de nou, és la visita número: $numVisites. </h2>";
    print "<h3> Última visita: $ultimaVisita. </h3>";

    setcookie("visita", $numVisites . "|" . $fecha);

} else{
    print "<h2> Hola, aquesta és la primera vegada que entres en aquesta pàgina. </h2>";
    setcookie("visita","1|" . $fecha);
}

?>
