<?php
include $_SERVER['DOCUMENT_ROOT'] . '/FuncionesSession_start/funcionesSession.php';

iniciaSession();

// Verificamos si el carrito está definido en la sesión
if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
    // Mostramos el contenido del carrito
    echo "Carrito de compras:<br>";
    foreach ($_SESSION['carrito'] as $modelo) {
        echo "- $modelo<br>";
    }
} else {
    // Si el carrito está vacío o no existe
    echo "El carrito está vacío.<br>";
}

echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>Volver</a>";
?>