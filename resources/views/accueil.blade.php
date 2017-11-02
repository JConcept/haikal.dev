@extends('layouts.main')
	@section('content')
		{{--  <!-- DÉBUT caroussel -->   --}}
		<div id="carouselIndex" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active" id="ca-1">
				</div>
				<div class="item" id="ca-2">
				</div>
				<div class="item" id="ca-3">
				</div>
				<style>
					#carouselIndex #ca-1{
						background: url("{{ url('img/caroussel (1).jpg') }}") no-repeat center;
					}
					#carouselIndex #ca-2{
						background: url("{{ url('img/caroussel (2).jpg') }}") no-repeat center;
					}
					#carouselIndex #ca-3{
						background: url("{{ url('img/caroussel (3).jpg') }}") no-repeat center;
					}
				</style>
			</div>
			<a class="left carousel-control" href="#carouselIndex" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carouselIndex" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
		{{--  <!-- FIN caroussel -->  --}}

		{{--  <!-- DÉBUT section présentation -->  --}}
		<section id="presentation">
			<h2 role="heading" aria-level="2">Présentation</h2>
				<div id="presentation-content">
					<p>
						<img id="artiste" src="{{ url('img/photo.jpg') }}" alt="Photo de l'artiste peintre Nelly Haikal" width="200" heigth="200">
						Née&nbsp;à&nbsp;Beyrouth en 1957, belge d'origine libanaise, diplômée des Beaux-Arts de Saint Luc Liège en 1981, formatrice en français langue étrangère et animatrice d'ateliers d'art pour adultes immigrés à l'a.s.b.l La Bobine.<br><br>
						Peintre figurative travaillant en atelier et traitant des scènes de rue et des figures humaines expressives. Autres créations, les  incrustations  photographiques dans les peintures, la photographie et les impressions photo selon les techniques alternatives utilisant des pigments,  travaille dans un atelier situé au 37 rue Fraigneux à 4000 Liège.<br>
						Depuis 2016 en association de fait  avec un collectif d’artistes «&nbsp;MEzZe&nbsp;».<br>
						<span class="callToAction" class="row">
							<a href="./peintures.php" class="btn btn-primary pull-left col-md-6 col-sm-6 col-xs-12">Voir mes peintures</a>
							<a href="./biographie.php" class="btn btn-primary pull-right col-md-6 col-sm-6 col-xs-12">En savoir plus</a>
						</span>
					</p>
					<div id="social-link">
						<a href="#">
							<?php echo file_get_contents("img/socialLinkedIn.svg"); ?>
						</a>
						<a href="#">
							<?php echo file_get_contents("img/socialYouTube.svg"); ?>
						</a>
					</div>
				</div>
		</section>
		{{--  <!-- FIN section présentation -->  --}}
	@endsection