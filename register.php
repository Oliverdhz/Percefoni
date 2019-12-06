<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Perséfone</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/logmaterial-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/logstyle.css">
</head>
<body>
        <header>¿Tienes una cuenta? <a href="login.php">Logueate</a></header>
        <div class="main">
            
            <div class="container">
                <div id="phpcode">
                    <?php
                        $todobien = true;
                        $listo = true;
                        function get_numeric($val){
                            if(is_numeric($val)){
                                return $val + 0;
                            }else{
                                return $val;
                            }
                        }
                        require ("reciclaje/conexion_registro.php");
                        if (!empty($_POST['email'])
                        && !empty($_POST['contrasena'])
                        && !empty($_POST['nombre'])
                        && !empty($_POST['apellido'])
                        && !empty($_POST['cedula'])
                        && !empty($_POST['direccion'])
                        && !empty($_POST['celular'])
                        && !empty($_POST['contrasena_confirmada'])){
                            if (is_int(get_numeric($_POST['cedula']))){
                                if(get_numeric($_POST['cedula']) > 0){
                                    if(mb_strlen(get_numeric($_POST['cedula'])) <> 11){
                                        echo "<p>El número de cédula le faltan digitos o tiene demasiados</p>";
                                        $todobien = false;
                                    }
                                }else{
                                    echo "<p>No añada caracteres no númericos en la cédula</p>";
                                    $todobien = false;
                                }
                            }else{
                                echo "<p>El número de cédula es incorrecto, no añada caracteres no númericos</p>";
                                $todobien = false;
                            }
                            if(is_int(get_numeric($_POST['celular']))){
                                if(get_numeric($_POST['celular']) > 0){
                                    if(mb_strlen(get_numeric($_POST['celular'])) <> 10 ){
                                        echo "<p>El número de célular le faltan digitos o tiene demasiados</p>";
                                        $todobien = false;
                                    }
                                }else{
                                    echo "<p>El numero de celular esta mal escrito, no añada carácteres no númericos</p>";
                                    $todobien = false;
                                }
                            }else{
                                echo "<p>El numero de celular esta mal escrito, no añada carácteres no númericos</p>";
                                $todobien = false;
                            }
                            if($todobien){
                                $email = "";
                                $email = $_POST['email'];
                                $verificacion = $conexion->query("SELECT email, nombre FROM usuarios WHERE email = '$email'");
                                if(empty($verificacion->fetch_assoc()['email'])){
                                    $nombre = "";
                                    $nombre = $_POST['nombre'];
                                    $apellido = "";
                                    $apellido = $_POST['apellido'];
                                    $contrasena = "";
                                    $contrasena = $_POST['contrasena'];
                                    $cedula = "";
                                    $cedula = $_POST['cedula'];
                                    $con_contrasena = "";
                                    $con_contrasena = $_POST['contrasena_confirmada'];
                                    $direccion = "";
                                    $direccion = $_POST['direccion'];
                                    $celular = "";
                                    $celular = $_POST['celular'];
                                    if($con_contrasena == $contrasena){
                                        $contrasena = md5($contrasena);
                                        $sql = "INSERT INTO usuarios(nombre, apellido,
                                                                    email, contrasena,
                                                                    cedula, dirreccion,
                                                                    actividad, es_admin,
                                                                    fecha_de_creacion, celular)
                                                                    VALUES ('$nombre', '$apellido',
                                                                            '$email','$contrasena',
                                                                            '$cedula', '$direccion',
                                                                            'I','No',
                                                                            now(),'$celular')";
                                        if($conexion->query($sql) === true){
                                            $listo = false;
                                            echo "<p>Registro completado con exito</p>";
                                            echo "<meta http-equiv='Refresh' content='2; url=login.php'>";
                                        }else{
                                            die("Error al registrar usuario: ". $conexion->error);
                                        }
                                    }else{
                                        echo "<p>Las contraseñas no coinciden</p>";
                                    }
                                }else{
                                    echo "<p>Ese email ya está registrado</p>";
                                }
                            }
                        }else{
                            echo "<p style=' color:red'>* Llena todos los campos</p>";
                        }
                    ?>
                </div>
                <?php if($listo): ?>
                    <form action="register.php" method="POST" class="appointment-form leave-comment" id="appointment-form">
                <h2>Registro</h2>
                <div class="form-group-1">

                        <?php if(isset($_POST['nombre'])): ?>
                    <input type="text" name="nombre" id="name"  placeholder="Introduce tu nombre" value="<?= $_POST['nombre'] ?>" required />
                    <?php else: ?>
                    <input type="text" name="nombre" id="name"  placeholder="Introduce tu nombre"  required />
                    <?php endif; ?>



                    <?php if(isset($_POST['apellido'])): ?>
                    <input type="text" name="apellido" placeholder="Introduce tu apellido" value="<?= $_POST['apellido'] ?>">
                <?php else: ?>
                    <input type="text" name="apellido" placeholder="Introduce tu apellido" >
                <?php endif; ?>

                    
                <?php if(isset($_POST['cedula'])): ?>
                <input type="number" name="cedula" placeholder="Introduce el número de tu cédula" value="<?= $_POST['cedula'] ?>" >
            <?php else: ?>
                <input type="number" name="cedula" placeholder="Introduce el número de tu cédula" >
            <?php endif; ?>


            <?php if(isset($_POST['direccion'])): ?>
            <input type="text" name="direccion" placeholder="Introduce la dirección de tu casa" value="<?= $_POST['direccion'] ?>" >
        <?php else: ?>
            <input type="text" name="direccion" placeholder="Introduce la dirección de tu casa" >
        <?php endif; ?>


        <?php if(isset($_POST['celular'])): ?>
        <input type="number" name="celular" placeholder="Introduce tu número de celular" value="<?= $_POST['celular'] ?>" >
    <?php else: ?>
        <input type="number" name="celular" placeholder="Introduce tu número de celular" >
    <?php endif; ?>


    <?php if(isset($_POST['email'])): ?>
    <input type="email" name="email" placeholder="Introduce tu email" value="<?= $_POST['email'] ?>" >
<?php else: ?>
    <input type="email" name="email" placeholder="Introduce tu email" >
<?php endif; ?>

<input type="password" name="contrasena" placeholder="Ingresa una contraseña" class="sizefull s-text7 p-l-22 p-r-22">
<input type="password" name="contrasena_confirmada" placeholder="Vuelve a escribir la contraseña" class="sizefull s-text7 p-l-22 p-r-22">

                </div>
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>
                <div class="form-submit">
                    <input type="submit" name="Aceptar" id="submit" class="submit" value="Registro" />
                </div>
            </form>
            <?php endif; ?>

        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/logjquery.min.js"></script>
    <script src="js/logmain.js"></script>
</body>
</html>