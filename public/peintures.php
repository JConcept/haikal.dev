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

	    <h1 role="heading" aria-level="1">Peintures</h1>
		
		<!-- DÉBUT section  -->

		<section>
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
									<h2>Titre 1</h2>		
								</div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h2>Titre 2</h2>
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h2>Titre 3</h2>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h2>Titre X</h2>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h2>Titre X</h2>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h2>Titre X</h2>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h2>Titre X</h2>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h2>Titre X</h2>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h2>Titre X</h2>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h2>Titre X</h2>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h2>Titre X</h2>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h2>Titre X</h2>			
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
	<script src="./vendor/jquery.mosaicflow/jquery.mosaicflow.min.js"></script>
	<script>
		$(document).ready(function () {
			$(".nav li").removeClass("active");
			$('#nav-galerie').addClass('active');
			$('#nav-peintures').addClass('active');
		});
	</script>
</body>
</html>