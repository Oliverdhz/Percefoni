<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<script src="https://cdn.snipcart.com/themes/v3.0.3/default/snipcart.js"></script>
<link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.0.3/default/snipcart.css" />
<div id="snipcart" data-api-key="ZjhhZjE5ODktMWE2MS00YmM1LWI4YjctN2NmYWFhN2RmMTNmNjM3MTA1NDI3NTY1MjcwNDYx" hidden></div>
</head>
<body class="animsition">
	<!-- Header -->
	
	<?php
	require ('reciclaje/header2.php');
	require ('reciclaje/header1.php');
	?>

	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
		<h2 class="l-text2 t-center">
			Women
		</h2>
		<p class="m-text13 t-center">
			New Arrivals Women Collection 2018
		</p>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<input class="s-text13 active1" id="all" value="all" checked type="radio" name="categoria">
								<label for="all">All</label>
							</li>

							<li class="p-t-4">
								<input class="s-text13 active1" id="mujer" value="mujer" type="radio" name="categoria">
								<label for="mujer">Mujer</label>
							</li>

							<li class="p-t-4">
								<input class="s-text13 active1" id="hombre" value="hombre" type="radio" name="categoria">
								<label for="hombre">Hombre</label>
							</li>

							<li class="p-t-4">
								<input class="s-text13 active1" id="ninos" value="nino" type="radio" name="categoria">
								<label for="ninos">Niños</label>
							</li>

							<li class="p-t-4">
								<input class="s-text13 active1" id="accesorios" value="accesorio" type="radio" name="categoria">
								<label for="accesorios">Accesorios</label>
							</li>
						</ul>

						<!--  -->
						<h4 class="m-text14 p-b-32">
							Filters
						</h4>

						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Price
							</div>

							<div class="wra-filter-bar">
								<div id="filter-bar"></div>
							</div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="w-size11">
									<!-- Button -->

								</div>
								<div class="s-text3 p-t-10 p-b-10">
									Range: $<span id="value-lower" >610</span> - $<span id="value-upper" name="valormaximo">980</span>
								</div>
							</div>
						</div>

						<div class="filter-color p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-12">
								Color
							</div>

							<ul class="flex-w">
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
									<label class="color-filter color-filter1" for="color-filter1"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
									<label class="color-filter color-filter2" for="color-filter2"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
									<label class="color-filter color-filter3" for="color-filter3"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
									<label class="color-filter color-filter4" for="color-filter4"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
									<label class="color-filter color-filter5" for="color-filter5"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
									<label class="color-filter color-filter6" for="color-filter6"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
									<label class="color-filter color-filter7" for="color-filter7"></label>
								</li>
							</ul>
						</div>

						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" id="nombre" name="search-product" placeholder="Search Products...">
						</div>
						</br>
						<form id="filtro">
							<button type="submit" class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
								Filter
							</button>
						</form>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span>
					</div>

					<!-- Product -->
					<div class="row" id="prodventa">
						<!-- Pon aquí los productos -->
						<?php
							$pdo;
							try {
								$conn = "mysql:host=localhost;dbname=persefone;charset=utf8mb4";
								$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
											PDO::ATTR_EMULATE_PREPARES => false];
								$pdo = new PDO($conn, 'root', '', $options);
							} catch (PDOException $e) {
								print_r("Error en la conexión: " . $e->getMessage());
							}
							$query = $pdo->prepare("SELECT * FROM producto");
							$query->execute();
							foreach($query as $currentProduct){
								$id = $currentProduct['id_producto'];
								$img = $id . $currentProduct['color1'];
								$nombre = $currentProduct['nombre'];
								$precio = $currentProduct['precio'];
								echo "<div class='col-sm-12 col-md-6 col-lg-4 p-b-50'>
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
												$$precio
											</span>
										</div>
									</div>
								</div>";
							}
						?>
					</div>

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
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
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 5, 500 ],
	        connect: true,
	        range: {
	            'min': 5,
	            'max': 500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script
    src="http://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			console.log('Me estoy ejecutando');
			$('#filtro').submit(function(e){
				var categoriap = $('input:radio[name=categoria]:checked').val();
				if(categoriap.indexOf('all') != -1){
					const datos = {
					valormenor: $('#value-lower').text(),
					valormayor: $('#value-upper').text(),
					nombre: $('#nombre').val()
					}
					$.post('reciclaje/colocaprod.php', datos, function (respuesta){
						$('#prodventa').html(respuesta);
					});
				}else{
					const datos = {
						valormenor: $('#value-lower').text(),
						valormayor: $('#value-upper').text(),
						nombre: $('#nombre').val(),
						categoria: $('input:radio[name=categoria]:checked').val()
					}
					$.post('reciclaje/colocaprod.php', datos, function (respuesta){
						$('#prodventa').html(respuesta);
					});
				}
				e.preventDefault();
			});
		});
	</script>
</body>
</html>
