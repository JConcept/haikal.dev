<?php
    include_once("./assets/php/template/htmlTemplateHeader.php");
?>
<body id="index">
		<?php
            include_once("./assets/php/template/navMenu.php");
        ?>		
	<div class="main">	

		<!-- DÉBUT caroussel --> 
		<div id="carouselIndex" class="carousel slide" data-ride="carousel">
			<?php
				include_once("./assets/php/template/header.php");
			?>
			<!--
			<ol class="carousel-indicators">
				<li data-target="#carouselIndex" data-slide-to="0" class="active"></li>
				<li data-target="#carouselIndex" data-slide-to="1" class=""></li>
				<li data-target="#carouselIndex" data-slide-to="2" class=""></li>
			</ol>-->
			<div class="carousel-inner">
				<div class="item active" id="ca-1">
					<!--<img alt="First slide" src="./assets/img/caroussel (1).jpg">
					<div class="container">
						<div class="carousel-caption">
							<h1>Example headline.</h1>
							<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
						</div>
					</div>-->
				</div>
				<div class="item" id="ca-2">
					<!--<img alt="Second slide" src="./assets/img/caroussel (2).jpg">
					<div class="container">
						<div class="carousel-caption">
							<h1>Another example headline.</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
						</div>
					</div>-->
				</div>
				<div class="item" id="ca-3">
					<!--<img alt="Third slide" src="./assets/img/caroussel (3).jpg">
					<div class="container">
						<div class="carousel-caption">
							<h1>One more for good measure.</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
						</div>
					</div>-->
				</div>
				<style>
					#carouselIndex #ca-1{
						background: url('./assets/img/caroussel (1).jpg') no-repeat center;
					}
					#carouselIndex #ca-2{
						background: url('./assets/img/caroussel (2).jpg') no-repeat center;
					}
					#carouselIndex #ca-3{
						background: url('./assets/img/caroussel (3).jpg') no-repeat center;
					}
				</style>
			</div>
			<a class="left carousel-control" href="#carouselIndex" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carouselIndex" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
		<!-- FIN caroussel -->

		<!-- DÉBUT section présentation -->
		<section id="presentation">
			<h1 role="heading" aria-level="1">Présentation</h1>
				<div id="presentation-content">
					<p>
						<img id="artiste" src="./assets/img/photo.jpg" alt="Photo de l'artiste peintre Nelly Haikal">
						Née à Beyrouth en 1957, belge d'origine libanaise, diplômée des Beaux-Arts de Saint Luc Liège en 1981, formatrice en français langue étrangère et animatrice d'ateliers d'art pour adultes immigrés à l'a.s.b.l La Bobine.<br><br>
						Peintre figurative travaillant en atelier et traitant des scènes de rue et des figures humaines expressives. Autres créations, les  incrustations  photographiques dans les peintures, la photographie et les impressions photo selon les techniques alternatives utilisant des pigments,  travaille dans un atelier situé au 37 rue Fraigneux à 4000 Liège.<br>
						Depuis 2016 en association de fait  avec un collectif d’artistes « MEzZe ».<br>
						<span class="callToAction">
							<a href="./peintures.php">Voir mes peintures</a>
							<a href="">En savoir plus</a>
						</span>
					</p>
					<div id="social-link">
						<a href="#"><img width="68" height="68" src="./assets/img/socialLinkedIn.svg" alt="Icone de LinkedIn"></a>
						<a href="#"><img width="68" height="68" src="./assets/img/socialYouTube.svg" alt="Icone de YouTube"></a>
					</div>	
				</div>		
		</section>
		
		<!-- <h2>Information</h2>
		<div role="tabpanel">
			Nav tabs --><!-- 
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active">
					<a href="#home" aria-controls="home" role="tab" data-toggle="tab">home</a>
				</li>
				<li role="presentation">
					<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">tab</a>
				</li>
			</ul>
		
			Tab panes --><!--
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, tenetur, consequatur. Soluta ea incidunt earum animi, quod adipisci corporis possimus, voluptatibus dicta ipsum. Sapiente exercitationem reprehenderit sint minima ut perspiciatis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, ut repellendus excepturi impedit vitae temporibus aut! Repellat dolore deleniti sit nemo, ducimus autem impedit quaerat. Fugit, eius, architecto. Nam, quaerat.</div>
				<div role="tabpanel" class="tab-pane" id="tab">
					<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia iste reiciendis unde cum minus architecto minima quia quaerat, nam perferendis nihil fuga pariatur itaque dolorum illo esse aliquid culpa earum!</div>
					<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum vel veritatis nihil dolores nisi id repellat? Placeat optio, ipsa molestias. Explicabo, distinctio magnam tenetur modi nam porro saepe molestias architecto?</div>
					<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga eos libero sint voluptatibus quod, eius molestiae necessitatibus rerum harum, minus magni! Reiciendis officiis odit sapiente, magni dignissimos qui iure maiores.</div>
				</div>
			</div>
		</div>

		fin information-->

		<!--début contact-->
		
		<!--
		<form action="" method="POST" role="form" id="contact-form">
			<legend><h2>Contact</h2></legend>
		
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
				<label for="">Email</label>
				<input type="text" class="form-control" id="" placeholder="Votre email">
			</div>
			<div class="form-group">
				<label for="">Message</label>
				<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		
		fin contact-->

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
			$('#nav-index').addClass('active');
		});
	</script>
</body>
</html>