<?php
	include_once("./assets/php/template/htmlTemplateHeader.php");
?>
<body id="galerie">
		<?php
			include_once("./assets/php/template/navMenu.php");
		?>		
	<div class="main">

		<section>
			<h2 role="heading" aria-level="2">Galerie</h2>
		
				<!-- DÉBUT caroussel --> 
				<div id="carousel-id" class="carousel slide" data-ride="carousel">
					<?php
						include_once("./assets/php/template/header.php");
					?>	
					<ol class="carousel-indicators">
						<li data-target="#carousel-id" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-id" data-slide-to="1" class=""></li>
						<li data-target="#carousel-id" data-slide-to="2" class=""></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active" id="ca-1">
						</div>
						<div class="item" id="ca-2">
						</div>
						<div class="item" id="ca-3">
						</div>
						<style>
							/* style pour insérer les background OU utiliser jQuery ? */
						</style>
					</div>
					<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
		</section>
		<!-- FIN caroussel -->

		<!-- DÉBUT section  -->

		<?php
			include_once("./assets/php/template/footer.php");
		?>

	</div>
	<?php
		include_once("./assets/php/template/loadLibJS.php");
	?>
	<script>
		$(document).ready(function () {
			$('#nav-galerie a').addClass('active');
		});
	</script>
</body>
</html>