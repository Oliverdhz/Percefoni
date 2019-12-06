<?php
$id;
if(!isset($_GET['view'])){
	header("Location: product.php");
}else{
	$id = $_GET['view'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
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
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.0.4/default/snipcart.css" />

</head>
<body class="animsition">

	<!-- Header -->
	<?php
	require ('reciclaje/header2.php');
	require ('reciclaje/header1.php');
	?>
	<?php
	$pdo;
	$img;
	$precio;
	$nombre;
	$descripcion;
	$categoria;
	$color;
	$size;
	try {
		$conn = "mysql:host=localhost;dbname=persefone;charset=utf8mb4";
		$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_EMULATE_PREPARES => false];
		$pdo = new PDO($conn, 'root', '', $options);
	} catch (PDOException $e) {
		print_r("Error en la conexión: " . $e->getMessage());
	}
	$query = $pdo->prepare("SELECT * FROM producto WHERE id_producto = $id");
	$query->execute();
	foreach($query as $currentProduct){
		if(empty($currentProduct['id_producto'])){
			header ('Location: product.php');
		}
		$img = $currentProduct['id_producto'] . $currentProduct['color1'];
		$precio = $currentProduct['precio'];
		$nombre = $currentProduct['nombre'];
		$descripcion = $currentProduct['descripcion'];
		$categoria = $currentProduct['Categoria'];
		$color = array(1 => $currentProduct['color1'],
						2 => $currentProduct['color2'],
						3 => $currentProduct['color3'],
						4 => $currentProduct['color4']);
		$size = array(
					'S' => $currentProduct['S'],
					'M' => $currentProduct['M'],
					'L' => $currentProduct['L'],
					'XL' => $currentProduct['XL']
		);
	}
	?>
	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="product.php" class="s-text16">
			Productos
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>
		<a href="product.html" class="s-text16">
			<?= $categoria ?>
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>
		<span class="s-text17">
			Detalles de <?= $nombre ?>
		</span>
	</div>

	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="images/<?= $img ?>.png">
							<div class="wrap-pic-w">
								<img src="images/<?= $img ?>.png" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="images/<?= $img ?>v2.png">
							<div class="wrap-pic-w">
								<img src="images/<?= $img ?>v2.png" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="images/<?= $img ?>v3.png">
							<div class="wrap-pic-w">
								<img src="images/<?= $img ?>v3.png" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="images/<?= $img ?>v4.png">
							<div class="wrap-pic-w">
								<img src="images/<?= $img ?>v4.png" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="images/<?= $img ?>v5.png">
							<div class="wrap-pic-w">
								<img src="images/<?= $img ?>v5.png" alt="IMG-PRODUCT">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					<?= $nombre ?>
				</h4>

				<span class="m-text17">
					$<?= $precio ?>
				</span>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Size
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2" name="size">
								<option>Choose an option</option>
								<?php
									if($size['S'] == 'V'){
										echo "<option>S</option>";
									}
									if($size['M'] == 'V'){
										echo "<option>M</option>";
									}
									if($size['L'] == 'V'){
										echo "<option>L</option>";
									}
									if($size['XL'] == 'V'){
										echo "<option>XL</option>";
									}
								?>
							</select>
						</div>
					</div>

					<div class="flex-m flex-w">
						<div class="s-text15 w-size15 t-center">
							Color
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
								<?php
								if($color[2] != null){
									$r = 1;
									echo "<select class='selection-2' name='color'>
										<option>Choose an option</option>";
									while($r <= 4){
										if($color[$r] != null){
											echo "<option>" . $color[$r] . "</option>";
										}
										$r = $r + 1;
									}
									echo "</select>";
								}else{
									echo "<select class='selection-2' name='color' disabled>
										<option>" . $color[1] . "</option>
									</select>";

								}
								?>
						</div>
					</div>

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<?php if(isset($_SESSION['email'])): ?>
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 snipcart-add-item"
  									  data-item-id="<?= $_GET['view'] ?>"
									  data-item-url="product-detail.php"
									  data-item-description="<?= $descripcion ?>"
									  data-item-image="images/<?= $img ?>.png"
									  data-item-price= "<?= $precio ?>"
									  data-item-name="<?= $nombre ?>">
									Añadir al Carrito
								</button>
								<?php else: ?>
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 snipcart-add-item"
								      data-item-id="<?= $_GET['view'] ?>"
									  data-item-url="product-detail.php"
									  data-item-description="<?= $descripcion ?>"
									  data-item-image="images/<?= $img ?>.png"
									  data-item-price= "<?= $precio ?>"
									  data-item-name="<?= $nombre ?>">
									  Añadir al Carrito
								</button>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Descripción
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?= $descripcion ?>
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Additional information
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
								Measurements: Length: 23"
								Chest: 19.5"
								Sleeve: 24"
								Measured on a size S
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Reviews (0)
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					<?php
					$query = $pdo->prepare("SELECT * FROM producto WHERE id_producto <> $id");
					$query->execute();
					foreach($query as $currentProduct){
						$id = $currentProduct['id_producto'];
						$img = $currentProduct['id_producto'] . $currentProduct['color1'];
						$nombre = $currentProduct['nombre'];
						echo "<div class='item-slick2 p-l-15 p-r-15'>
							<!-- Block2 -->
							<div class='block2'>
								<div class='block2-img wrap-pic-w of-hidden pos-relative'>
									<img src='images/$img.png' alt='IMG-PRODUCT'>

									<div class='block2-overlay trans-0-4'>
										<a href='#' class='block2-btn-addwishlist hov-pointer trans-0-4'>
											<i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>
											<i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>
										</a>

										<div class='block2-btn-addcart w-size1 trans-0-4'>
											<!-- Button -->
											<a href='product-detail.php?view=$id' class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>
												Ver más
											</a>
										</div>
									</div>
								</div>

								<div class='block2-txt p-t-20'>
									<a href='product-detail.php?view=$id' class='block2-name dis-block s-text3 p-b-5'>
										$nombre
									</a>

									<span class='block2-price m-text6 p-r-5'>
										$92.50
									</span>
								</div>
							</div>
						</div>";
					}
					?>
				</div>
			</div>

		</div>
	</section>


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Ac&eacute;rcatenos
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Alguna pregunta? Envianos un Correo o Subscribete a nuestro Newsletter, Tambien puedes llamar al  (+1) 96 716 6879

					</p>

					<div class="flex-m p-t-30">
						<a href="https://www.facebook.com/Pers%C3%A9fone-106493590823012/?__xts__%5B0%5D=68.ARCg1amfH-7EuMPEUrypHCVoDRqMjezoM2CiWRNS0Wgi-XIUxdENtUOKthFTb3gTq6KAFUcb2DgN5V8dKK4FLDfp-K287hIrcyyYT1irO-z4-9AfNGnYcx8Oha0f5nl9IM3wBwJ4UBXBcdzfScmUEZ0cGv3rKsPICWdxarYroWo5CwfQ1_XKh8i41lTqulPcmTMcP68gI-_R1PNkDF6SZzVySSmfq-5IlG21JaRU-dGfoiw8pJ3ONGEBg2c88Oue54t1_f1LE-1JKyEBx2S8UBgylDAQuN1g&__xts__%5B1%5D=68.ARBAeiavXCEpJ0vJZ-DYk-Ueb__wgT_gWRTrMSGGyLwnTqOqhwRxhGQixksUqvb9PfJwK1fu72Ax4Iez_VlAOol_fHrwrp6ulBhO5KUyojKCrjBIXaJ4cw0-wm3KMy-L8CovSTAjajBXqVjd6OoiWrAWaXswoJwwgSIo5vcpDnpDZkACXGStcvVQr4osacGTKYSpW5eHItOxr6aG9bnkvIV_lRG9UfDi3TuN6qyzIZArxfSs2JV8qtAtdAj1dKGMi02QU5l0PsV8SNhP6wC2c4dRjVl5o3CT&hc_ref=ARQZ-9EygAU0ktDWh9pcVhxmbmar8-AuSuc9yGxNXBX-UiZruIK2fGAInGxjajOg7MQ&__tn__=kC-R" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categorias
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Hombres
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Mujeres
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Vestidos
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Lentes
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Busqueda
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Sobre Nosotros
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Contactanos
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Ayuda
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Track Order
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Shipping
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Newsletter
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribete
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2019 All rights reserved. | This Website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">El Capitan de los 7 pecados capitales</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	

<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!--===============================================================================================-->
	<div hidden id="snipcart" data-api-key="ZjhhZjE5ODktMWE2MS00YmM1LWI4YjctN2NmYWFhN2RmMTNmNjM3MTA1NDI3NTY1MjcwNDYx"></div>
<script src="https://cdn.snipcart.com/themes/v3.0.4/default/snipcart.js"></script>
<!--<script>
	$(document).ready(function(){
		console.log('Me estoy ejecutando');
		$("#select2-color-rg-container").on('change', function(e){
			console.log("Si veo el cambio");
			/*const datos ={
				ubiccolor: $('#select2-color-0g-container option:selected').val(),
				color: $('#select2-color-0g-container option:selected').text(),
				id: '$_GET['view']'
			};
			$.post('reciclaje/colorsel.php', datos, function (respuesta){
				$('#mostrador').html(respuesta);
				$('#aejecutar').attr('src',"vendor/slick/slick.min.js");
				$('#aejecutar2').attr('src',"js/slick-custom.js");
				$('#aejecutar3').attr('src',"vendor/sweetalert/sweetalert.min.js");
				$('#aejecutar4').attr('src',"js/main.js");
			});*/
		});
	});
</script>-->

</body>
</html>
