<?php
include $_SERVER['DOCUMENT_ROOT'] . '/FuncionesSession_start/funcionesSession.php';

iniciaSession();

$modelos=["A3", "A4", "Q7"];


foreach($modelos as $modelo){
    echo "<div>";
    echo "<span>$modelo</span> ";
    echo "<a href='comprado.php?modelo=$modelo'>Añadir al carrito</a>";
    echo "</div>";
}
echo "<br>";
echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>Volver</a>";
echo "<input type='button' value='Carrito'>";



