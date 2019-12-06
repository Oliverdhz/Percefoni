<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login perséfone</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/logfavicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/logbootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/logfont-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/logicon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/loganimate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/loghamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/loganimsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/logselect2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/logdaterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/logutil.css">
	<link rel="stylesheet" type="text/css" href="css/logmain.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-color: #f0f0f0;">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
			<?php
        include_once 'reciclaje/user.php';
        include_once 'reciclaje/user_sesion.php';
        $userSession = new UserSession();
        $user = new User();
        if(isset($_SESSION['email'])){
            //echo "La sesión está iniciada";
            header("Location: DaRealIndex.php");
        }else if(isset($_POST['email']) && isset($_POST['contrasena'])){
            $userForm = $_POST['email'];
            $passForm = $_POST['contrasena'];
            if($user->userExists($userForm, $passForm)){
                //echo "<p>Usuario validado</p>";
                $userSession->setCurrentUser($userForm);
                $user->setUser($userForm);
                header("Location: DaRealIndex.php");
            }else{
                echo "<p>Email o password incorrectos</p>";
            }
        }
        ?>
				<form class="login100-form validate-form flex-sb flex-w" action="login.php" method="post" class="leave-comment">
					<span class="login100-form-title p-b-53">
						Iniciar Sesión:
					</span>

					<!--<a href="#" class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="#" class="btn-google m-b-20">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a>-->
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Usuario o Correo Electronico
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="email" name="email" id="exampleInputEmail1"  >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Contraseña
						</span>

						<a href="#" class="txt2 bo1 m-l-5">
							Olvidaste?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="contrasena">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn"  type="submit" name="Aceptar" value="Login">
							Iniciar Sesi&oacute;n
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							No es miembro?
						</span>

						<a href="register.php" class="txt2 bo1">
							Registrate ahora!	
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/logjquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/loganimsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/logpopper.js"></script>
	<script src="vendor/bootstrap/js/logbootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/logselect2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/logmoment.min.js"></script>
	<script src="vendor/daterangepicker/logdaterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/logcountdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/logmain.js"></script>

</body>
</html>