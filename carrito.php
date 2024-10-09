<?php
include $_SERVER['DOCUMENT_ROOT'] . '/FuncionesSession_start/funcionesSession.php';

iniciaSession();

function addCarrito(){
    if(!isset($_GET['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    if(isset($_GET['modelo'])){
        $modelo=$_GET['modelo'];

        //Añade el modelo al carrito
        $_SESSION['carrito'][]=$modelo;


    }
}

function verCarrito(){
    if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0){
        echo "<h1>Tu carrito</h1>";
        echo "<ul>";
        foreach ($_SESSION['carrito'] as $producto) {
            echo "<li>$producto</li>";
        }

    }
}