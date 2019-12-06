<?php
require 'conexion_registro.php';
if(!empty($_POST['nombre']) &&
!empty($_POST['procedencia']) &&
!empty($_POST['marca']) &&
!empty($_POST['precio']) &&
!empty($_POST['peso']) &&
!empty($_POST['descripcion']) &&
!empty($_POST['color'])){
    $nombre = $_POST['nombre'];
    $procedencia = $_POST['procedencia'];
    $marca = $_POST['marca'];
    $precio = $_POST['precio'];
    $peso = $_POST['peso'];
    $descripcion = $_POST['descripcion'];
    $color = $_POST['color'];
    $sql = "INSERT INTO producto(nombre, procedencia,
                                marca, descripcion,
                                precio, peso,
                                color) VALUES ('$nombre', '$procedencia',
                                            '$marca', '$descripcion',
                                            $precio, $peso,
                                            '$color')";
    if($conexion->query($sql) === true){
        echo 'Los datos fueron insertados con exito';
    }else{
        die("Error al registrar usuario: ". $conexion->error);
    }
}else{
    echo 'Llena todos los campos';
}
?>