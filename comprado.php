<?php
include $_SERVER['DOCUMENT_ROOT'] . '/FuncionesSession_start/funcionesSession.php';

iniciaSession();
//session_start();
// Verificamos si el modelo ha sido pasado correctamente en la URL
if (isset($_GET['modelo']) && !empty($_GET['modelo'])) {
    $modelo = $_GET['modelo'];

    // Inicializamos el carrito si no existe
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }
    // Añadimos el modelo al carrito
    $_SESSION['carrito'][] = $modelo;
    



    // Mensaje de confirmación
    echo "Modelo $modelo añadido al carrito.<br>";
    echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>Volver</a> | <a href='verCarrito.php'>Ver carrito</a>";
} else {
    // Si no se ha pasado un modelo, mostramos un mensaje de error
    echo "No se ha seleccionado ningún modelo.<br>";
    echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>Volver</a>";
}
?>

