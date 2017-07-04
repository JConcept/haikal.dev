<?php
    include_once("./assets/php/template/htmlTemplateHeader.php");
?>
<body id="biographie">
		<?php
            include_once("./assets/php/template/navMenu.php");
        ?>		
	<div class="main">
		<div id="head-container"> 
			<?php
				include_once("./assets/php/template/header.php");
			?>
		</div>	

	    <h1 role="heading" aria-level="1">Biographie</h1>
		

		<!-- DÉBUT section-1 présentation -->
		<section id="presentation">
			<h2 role="heading" aria-level="2">Présentation</h2>
					<p>
						<img id="artiste" src="./assets/img/photo.jpg" alt="Photo de l'artiste peintre Nelly Haikal">
						Née à Beyrouth en 1957, belge d'origine libanaise, diplômée des Beaux-Arts de Saint Luc Liège en 1981, formatrice en français langue étrangère et animatrice d'ateliers d'art pour adultes immigrés à l'a.s.b.l La Bobine.<br><br>
						Peintre figurative travaillant en atelier et traitant des scènes de rue et des figures humaines expressives. Autres créations, les  incrustations  photographiques dans les peintures, la photographie et les impressions photo selon les techniques alternatives utilisant des pigments,  travaille dans un atelier situé au 37 rue Fraigneux à 4000 Liège.<br>
						Depuis 2016 en association de fait  avec un collectif d’artistes « MEzZe ».<br>
					</p>
		</section>
		<!-- FIN section-1 présentation -->

		<!-- DÉBUT section-2 démarche -->
		<section id="démarche">
			<h2 role="heading" aria-level="2">Démarche</h2>
			<img id="artiste2" width="150" src="./assets/img/nelly-2.jpg" alt="Photo de l'artiste peintre Nelly Haikal">
			<p>
				Munie de mon appareil photo et de ma caméra, je capte des paysages qui me touchent et dans lesquels je construis une vie. De retour dans mon atelier je structure mes images dans un format personnel, dégageant un espace qui respire, et inspire l’imaginaire.
			</p>
			<p>
				Depuis 2012 j’expérimente le montage vidéo, l’image en mouvement.
			</p>
			<p>
				Lors d’un cours sur la beauté, je me souviens avoir dit que la beauté est ce qui est vrai, ce qui touche les sensibilités. Ma démarche est semblable. Je montre ce qui me touche et m’envahit. 
			</p>
		</section>
		<!-- FIN section-2 démarche -->

        <?php
            include_once("./assets/php/template/footer.php");
        ?>

	</div>
	<?php
        include_once("./assets/php/template/loadLibJS.php");
    ?>
	<script>
		$(document).ready(function () {
			$(".nav li").removeClass("active");
			$('#nav-biographie').addClass('active');
		});
	</script>
</body>
</html>