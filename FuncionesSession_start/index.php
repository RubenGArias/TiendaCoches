<?php
include 'funcionesSession.php';
$user="ruben";
login($user);
if(estaLogeado()){
    echo "Está logeado";
}