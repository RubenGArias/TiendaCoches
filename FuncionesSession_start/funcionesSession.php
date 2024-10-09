<?php
function iniciaSession(){
    session_start();
}

function cierraSession(){
    session_unset();
}

function leerSession($user){
    if(isset($_SESSION[$user])){
        return $_SESSION['user'];
    }else{
        return "";
    }
}

function escribeSession($clave, $value){
    $_SESSION[$clave]=$value;
}

function login($user){
    iniciaSession();
    $_SESSION['user']=$user;
}

function logout(){
    session_destroy();
    //destruyo la sesión
}

function estaLogeado(){
    return isset($_SESSION['user']);
}

