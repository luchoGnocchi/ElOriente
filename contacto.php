<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>El Oriente Importaciones - Contacto</title>
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
</head>
<body> 
<!--header-->
	<div class="header">
		<!--======= MENU INICIO =======-->
		<?php $entrada_activa = 6; include("f_menu.php"); ?>   
		<!--======= MENU FIN =======-->
		
		<!--======= LOGO Y UBICACION INICIO =======-->
		<?php include("f_logoyubicacion.php"); ?>   
		<!--======= LOGO Y UBICACION FIN =======-->
	</div>
	
	<!--content-->
	<div class="content">
	<div class="contact">
		<div class="container">	
			<div class="contact-top">		
				<h3>contacto</h3>
				<p>Contáctese con nosotros para realizar consultas o pedidos con algún vendedor atravez de nuestro email elOriente.001@gmail.com, Cel.: (+598) 095 952 153 o por el siguiente Formulario de Consulta. Sino puede visitarnos en nuestro principal local.</p>
			</div>
			<div class="map-content">
			<div class="col-md-6 map">
			<h4>Ubicación</h4>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3369.9463142102572!2d-54.17858098279544!3d-32.366985692213625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzLCsDIyJzAxLjIiUyA1NMKwMTAnMzcuMiJX!5e0!3m2!1ses!2suy!4v1451569761803"></iframe>
			</div>
				<div class="col-md-6 contact-grid">
					<h4>Consulta</h4>
					<form>
						
						<input type="text" value="Nombre" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Nombre';}">
						
						<input type="text" value="Asunto" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Asunto';}">
						
						<input type="text" value="Celular/Telefono" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Celular/Telefono';}">
					
						<textarea cols="77" rows="6" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'mensaje';}">mensaje</textarea>
						<div class="send-in">
							<input type="submit" value="Enviar" >
						</div>
					</form>
				</div>
			</div>
		</div>
		</div>	
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