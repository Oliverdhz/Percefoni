<?php
	//conectamos Con el servidor
	$conectar=@mysql_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysql_select_db('prueba');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	//recuperar las variables
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	$=$_POST[''];
	//hacemos la sentencia de sql
	$sql="INSERT INTO datos VALUES('$nombre',
								   '$correo',
								   '$',
								   '$',)"
								   
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>