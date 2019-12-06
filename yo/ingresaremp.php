<?php
require "conexion.php";
if(!empty($_POST["nombreemp"]) &&
!empty($_POST["apellidoemp"]) &&
!empty($_POST["sexoemp"]) &&
!empty($_POST["direccionemp"]) &&
!empty($_POST["edademp"]) &&
!empty($_POST["emailemp"] &&
!empty($_POST["horarioemp"]) &&
!empty($_POST["salarioemp"]) &&
!empty($_POST["cargoemp"]) &&
!empty($_POST["deptoemp"]) &&
!empty($_POST["enfemp"]) &&
!empty($_POST["telemp"]) &&
!empty($_POST["telpariente"]) &&
!empty($_POST["fechaingemp"]) &&
!empty($_POST["cedulaemp"]) &&
!empty($_POST["nivelacademico"])
){
    $nombree = $_POST["nombreemp"];
    $apellidoe = $_POST["apellidoemp"];
    $sexoe = $_POST["sexoemp"];
    $direccione = $_POST["direccionemp"];
    $edade = $_POST["edademp"];
    $emaile = $_POST["emailemp"];
    $horarioe = $_POST["horarioemp"];
    $cargoe = $_POST["cargoemp"];
    $deptoe = $_POST["deptoemp"];
    $tele = $_POST["telemp"];
    $telp = $_POST["telpariente"];
    $enfe = $_POST["enfemp"];
    $fechainge = $_POST["fechaingemp"];
    $cedulae = $_POST["cedulaemp"];
    $nivelacade = $_POST["nivelacademico"];
    $sueldoe = $_POST["salario"];
    $nivele = $_POST["nivelencargado"];
    
    $sql1 = "INSERT INTO empleados(nombre_empleado, apellido_empleado,
    cedula_empleado, direccion_empleado, 
    telefono_empleado, sexo_empleado,
    enfermedades_alergias_empleado, 
    cargo_empleado, horario_trabajo, 
    sueldo_empleado, fecha_ingreso_empleado, 
    id_dpto_empleado, edad_empleado, nivel_academico_e) values ('$nombree', '$apellidoe', 
    '$cedulae', '$direccione', '$tele','$sexoe', '$enfe', '$cargoe',
    '$horarioe', $sueldoe, '$fechainge', $deptoe, $edade, '$nivelacade')";
    if($conexion -> query($sql1) === true){
        echo 'Los datos fueron registrados correctamente';
    }else{
        die("Error al registrar los datos");
    }
    $sql2 ="ALTER TABLE parientes_empleados" 
}

else{
    echo"Llena todos los campos"
}
?>