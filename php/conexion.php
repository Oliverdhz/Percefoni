<?php
function conexion(){
    $con = mysql_connect(“localhost”, ”root”, ”persefone”);
    if (!$con){
        die(‘No se pudo conectar a MySQL. Error: ‘ . mysql_error());
    }
?>