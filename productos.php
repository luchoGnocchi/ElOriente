<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>El Oriente Importaciones - Productos</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Machine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('#example1 a').Chocolat();
		});
		</script>
</head>
<body> 
<!--header-->
	<div class="header">
		<!--======= MENU INICIO =======-->
		<?php $entrada_activa = 4; include("f_menu.php"); ?>   
		<!--======= MENU FIN =======-->
		
		<!--======= LOGO Y UBICACION INICIO =======-->
		<?php include("f_logoyubicacion.php"); ?>   
		<!--======= LOGO Y UBICACION FIN =======-->
	</div>
	<!--banner-->
	<script src="js/responsiveslides.min.js"></script>
	<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
	<!--content-->
	<div class="content">
		<div class="content-bottom-grid">
			<div class="container">
				<div class="content-bottom">
					<h3>Productos</h3>
					<span><i>Somos importadores, mayoristas, distribuidores y representantes de las marcas más importantes del ramo. Contamos con envíos a todo Uruguay.</i></span>
					<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore </p>
				</div>
		<!--======= PRODUCTOS INICIO =======-->
		<?php include("f_productos.php"); ?>   
		<!--======= PRODUCTOS FIN =======-->
		<!--======= COMUNIQUESE INICIO =======-->
		<?php include("f_comuniquese.php"); ?>   
		<!--======= COMUNIQUESE FIN =======-->
			</div>
		</div>
		<!-- requried-jsfiles-for owl -->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo").owlCarousel({
									        items : 4,
									        lazyLoad : true,
									        autoPlay : true,
									        navigation : true,
									        navigationText :  true,
									        pagination : false,
									      });
									    });
									  </script>
							 <!-- //requried-jsfiles-for owl -->

		<!-- start content_slider -->
		<div id="example1">
		<div id="owl-demo" class="owl-carousel text-center">
			<div class="item">
				<a href="images/pc.jpg" title="Rose" rel="title1">
					<img class="img-responsive lot" src="images/pc.jpg" alt="">
				</a>
			</div>
			<div class="item">
				<a href="images/pc1.jpg" title="Rose" rel="title1">
					<img class="img-responsive lot" src="images/pc1.jpg" alt="">
				</a>
			</div>
			<div class="item">
				<a href="images/pc2.jpg" title="Rose" rel="title1">
					<img class="img-responsive lot" src="images/pc2.jpg" alt="">
				</a>
			</div>
			<div class="item">
				<a href="images/pc3.jpg" title="Rose" rel="title1">
					<img class="img-responsive lot" src="images/pc3.jpg" alt="">
				</a>
			</div>
			<div class="item">
				<a href="images/pc.jpg" title="Rose" rel="title1">
					<img class="img-responsive lot" src="images/pc.jpg" alt="">
				</a>
			</div>
			<div class="item">
				<a href="images/pc1.jpg" title="Rose" rel="title1">
					<img class="img-responsive lot" src="images/pc1.jpg" alt="">
				</a>
			</div>
			<div class="item">
				<a href="images/pc2.jpg" title="Rose" rel="title1">
					<img class="img-responsive lot" src="images/pc2.jpg" alt="">
				</a>
			</div>
			<div class="item">
				<a href="images/pc3.jpg" title="Rose" rel="title1">
					<img class="img-responsive lot" src="images/pc3.jpg" alt="">
				</a>
			</div>
		</div>
		</div>
		<!--//sreen-gallery-cursual---->
	</div>
	<!--footer-->
	<div class="footer">
		<div class="container">
		<!--======= PROMO INICIO =======-->
		<?php include("f_suscripcion.php"); ?>   
		<!--======= PROMO FIN =======-->
		<!--======= PROMO INICIO =======-->
		<?php include("f_socialycopy.php"); ?>   
		<!--======= PROMO FIN =======-->
		</div>
	</div>
</body>
</html>