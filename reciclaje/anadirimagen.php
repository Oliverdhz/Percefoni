<?php
require ('conexion_registro.php');
$verificacion = $conexion->query("SELECT max(id_producto) as id FROM producto");
$num = $verificacion->fetch_assoc()['id'] + 1;
if(move_uploaded_file($_FILES['file']['tmp_name'], "../images/" . $num . ".png")){
    echo 1;
}else{
    echo 2;
}
?>