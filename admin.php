<?php
require 'reciclaje/user.php';
require 'reciclaje/user_sesion.php';
$userSession = new UserSession();
$user = new User();
?>
<?php
if(!isset($_SESSION['email'])){
    header('Location: DaRealIndex.php');
}else{
    $pdoa;
    $email = $_SESSION['email'];
    $admin;
    try {
        $conn = "mysql:host=localhost;dbname=persefone;charset=utf8mb4";
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false];
        $pdoa = new PDO($conn, 'root', '', $options);
    } catch (PDOException $e) {
        print_r("Error en la conexión: " . $e->getMessage());
    }
    
    $query = $pdoa->prepare("SELECT * FROM usuarios WHERE email = '$email'");
    $query->execute();
    foreach($query as $currentProduct){
        $admin = $currentProduct['es_admin'];
    }
    if($admin == 'No'){
        header('Location: DaRealIndex.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <div class="col-md-6 p-b-30">
        <form id="registrar" class="leave-comment">
            <div class="bo4 of-hidden size15 m-b-20">
                <input type="text" id="nombre" placeholder="Introduce el nombre del objeto" class="sizefull s-text7 p-l-22 p-r-22">
            </div>
            <div class="bo4 of-hidden size15 m-b-20">
                <input type="text" id="procedencia" placeholder="Introduce la procedencia del objeto" class="sizefull s-text7 p-l-22 p-r-22">
            </div>
            <div class="bo4 of-hidden size15 m-b-20">
                <input type="text" id="marca" placeholder="Introduce la marca del objeto" class="sizefull s-text7 p-l-22 p-r-22">
            </div>
            <textarea id="descripcion" class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" placeholder="Descripcion del obejto"></textarea>
            <div class="bo4 of-hidden size15 m-b-20">
                <input type="number" id="precio" step="any" placeholder="Introduce el precio del objeto" class="sizefull s-text7 p-l-22 p-r-22">
            </div>
            <div class="bo4 of-hidden size15 m-b-20">
                <input type="number" id="peso" step="any" placeholder="Introduce el peso del objeto" class="sizefull s-text7 p-l-22 p-r-22">
            </div>
            <div class="bo4 of-hidden size15 m-b-20" id="scolor">
                <select id="color">
                    <option>Color del obejeto</option>
                    <option>Blanco</option>
                    <option>Negro</option>
                    <option>Rojo</option>
                    <option>Azul</option>
                    <option>Rosa</option>
                    <option>Gris</option>
                </select><button type="submit" id="ocolor">Añadir color alternativo</button>
            </div>
            <input type="file" name="archivo" id="imagen" accept="image/png, image/jpeg, image/jpg, image/gif" placeholder="Imagen del producto">
            <button type="submit" id="listo">Añadir</button>
        </form>
    </div>
    <script
    src="http://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="reciclaje/anadir.js"></script>
</body>
</html>