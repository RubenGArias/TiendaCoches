<?php
include $_SERVER['DOCUMENT_ROOT'] . '/FuncionesSession_start/funcionesSession.php';

iniciaSession();

$modelos=["Clase E", "Clase A", "Clase B"];

foreach($modelos as $modelo){
    echo "<div>";
    echo "<span>$modelo</span> ";
    echo "<a href=''>Añadir al carrito</a>";
    echo "</div>";
}
echo "<br>";
echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>Volver</a>";
echo "<input type='button' value='Carrito'>";