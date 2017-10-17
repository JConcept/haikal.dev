<?php
	include_once("./assets/php/template/htmlTemplateHeader.php");
?>
<body id="contact">
		<?php
			include_once("./assets/php/template/navMenu.php");
		?>		
	<div class="main">
		<div id="head-container"> 
			<?php
				include_once("./assets/php/template/header.php");
			?>
		</div>	

		<section>
			<h2 role="heading" aria-level="2">Contact</h2>
			
				<!-- DÉBUT formulaire de contact -->
				<form action="" method="POST" role="form" id="contact-form">		
					<div class="form-group">
						<label for="">Nom</label>
						<input type="text" class="form-control" id="" placeholder="Votre nom">
					</div>
					<div class="form-group">
						<label for="">Prénom</label>
						<input type="text" class="form-control" id="" placeholder="Votre prénom">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control" id="" placeholder="Votre email">
					</div>
					<div class="form-group">
						<label for="">Sujet</label>
						<input type="Sujet" class="form-control" id="" placeholder="Au sujet de ...">
					</div>
					<div class="form-group">
						<label for="">Message</label>
						<textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Votre message"></textarea>
					</div>
					<button type="submit" class="callToAction btn btn-primary">Transmettre le message</button>
				</form>
				<!-- FIN formulaire de contact -->
		</section>

		<?php
			include_once("./assets/php/template/footer.php");
		?>

	</div>
	<?php
		include_once("./assets/php/template/loadLibJS.php");
	?>
	<script>
		$(document).ready(function () {
			$('#nav-contact a').addClass('active');
		});
	</script>
</body>
</html>