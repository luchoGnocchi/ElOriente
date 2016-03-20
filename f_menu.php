<div class="header-top">
			<div class="container">
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li><a href="index.php" class="scroll"><span <?php if ($entrada_activa == 1 ) echo 'class="current"'; ?> data-hover="INICIO">INICIO</span></a><label> </label></li>
						<li><a href="promociones.php" class="scroll"> <span <?php if ($entrada_activa == 2 ) echo 'class="current"'; ?> data-hover="PROMOCIONES">PROMOCIONES</span></a><label> </label></li>
						<li><a href="servicios.php" class="scroll"><span <?php if ($entrada_activa == 3 ) echo 'class="current"'; ?> data-hover="SERVICIOS">SERVICIOS</span></a><label> </label></li>
						<li><a href="productos.php" class="scroll"><span <?php if ($entrada_activa == 4 ) echo 'class="current"'; ?> data-hover="PRODUCTOS">PRODUCTOS</span></a><label> </label></li>
						<li><a href="marcas.php" class="scroll"><span <?php if ($entrada_activa == 5 ) echo 'class="current"'; ?> data-hover="MARCAS">MARCAS</span></a><label> </label></li>
						<li><a href="contacto.php" class="scroll"><span <?php if ($entrada_activa == 6 ) echo 'class="current"'; ?> data-hover="CONTACTO">CONTACTO</span></a></li>
					</ul>
					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>
				</div>
				 <div class="search-box">
					    <div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Que desea buscar..." type="search" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
				    </div>
					<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->
			<div class="clearfix"> </div>
			</div>
		</div>