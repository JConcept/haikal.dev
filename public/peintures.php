<?php
	include_once("./assets/php/template/htmlTemplateHeader.php");
?>
<body id="peintures">
		<?php
			include_once("./assets/php/template/navMenu.php");
		?>		
	<div class="main">
		<div id="head-container"> 
			<?php
				include_once("./assets/php/template/header.php");
			?>
		</div>	

		<!-- DÉBUT section  -->
		<section>
		<h2 role="heading" aria-level="2">Peintures</h2>
		
			<div role="tabpanel">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#paysage" aria-controls="paysage" role="tab" data-toggle="tab">Paysage</a>
					</li>
					<li role="presentation">
						<a href="#portrait" aria-controls="portrait" role="tab" data-toggle="tab">Portrait</a>
					</li>
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="paysage">

						<div class="wrapper">
							<div class="column">
								<div class="inner"></div>
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre 1</h3>		
								</div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre 2</h3>
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre 3</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
						</div>

					</div>
					<div role="tabpanel" class="tab-pane" id="portrait">

						<div class="wrapper">
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
						</div>
						

					</div>
				</div>
			</div>
		</section>

		<!-- FIN section  -->

		<?php
			include_once("./assets/php/template/footer.php");
		?>

	</div>
	<?php
		include_once("./assets/php/template/loadLibJS.php");
	?>
	<script>
		$(document).ready(function () {
			$('#nav-galerie').addClass('active');
			$('#nav-peintures a').addClass('active');
		});
	</script>
</body>
</html>