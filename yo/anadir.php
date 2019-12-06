<?php
if(!empty($_POST['mot_pag']) &&
!empty($_POST['monto']) &&
!empty($_POST['nom_i'])){
    $dominio = "localhost";
    $usuariodeweb = "root";
    $contraseña = "";
    $db = "bdsunflower";
    $conexion = new mysqli($dominio, $usuariodeweb, $contraseña, $db);
    if($conexion -> connect_error){
        die("Conexion fallida: ". $conexion-> connect_error);
    }
    $mot_pag = $_POST['mot_pag'];
    $monto = $_POST['monto'];
    $nom_i = $_POST['nom_i'];
    if($conexion->query("INSERT INTO pago_extra (motivo_pago,
                                                fecha_pago_extra,
                                                monto_pago_extra,
                                                nombre_infante_extra) VALUES ('$mot_pag',
                                                                                now(),
                                                                                $monto,
                                                                                '$nom_i')")){
        
    }
}
?>