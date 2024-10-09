<?php
session_start();

$user_valido = [
    "ruben" => "1234",
    "rufo" => "9876"
];

$marcasCoche=["Peugeot"=>["206", "3008", "208"], 
              "Mercedes"=>["Clase E", "Clase A", "Clase B"],
              "Audi" => ["A3", "A4", "Q7"]];
              
//Manda el formulario con su método
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    //Verifica que el usuario y contraseña existan
    if(isset($user_valido[$user]) && $user_valido[$user] === $pass){
        $_SESSION['logged'] = true;
        $_SESSION['user'] = $user;

        //Muestra las marcas si no se han seleccionado ninguna
        if(!isset($_GET['marca'])){
            echo "<h2>Marcas de coches</h2>";

            foreach ($marcasCoche as $marca => $coches) {
                echo "<div>";
                echo "<span>$marca</span> ";
                echo "<a href='$marca.php'>Ver coches</a>";
                echo "</div>";
            }
        }
        exit;
    }else{
        echo "Usuario o contraseña incorrectos";

        exit;
    }

}

//Verifica que exista el usuario y contraseña
/*if(!isset($_SESSION['logged']) || $_SESSION['logged'] !== true){
    header("Location: login.html");
    exit;
}*/



