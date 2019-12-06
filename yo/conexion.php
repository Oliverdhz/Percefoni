<?php
    $dominio = "localhost";
    $usuario = "root";
    $password = "";
    $db = "bdsunflower";
    $conexion = new mysqli($dominio, $usuario, $password, $db);
    if($conexion -> connect_error){
        die("Conexion fallida: ".$conexion -> connect_error);
    }
?>