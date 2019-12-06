<?php

    $dominio = "localhost";
    $usuariodeweb = "root";
    $contraseña = "";
    $db = "persefone";
    $conexion = new mysqli($dominio, $usuariodeweb, $contraseña, $db);
    if($conexion -> connect_error){
        die("Conexion fallida: ". $conexion-> connect_error);
    }
?>