@extends('layouts.main')
	@section('content')
		{{--  <!-- DÉBUT caroussel -->   --}}
		<div id="carouselIndex" class="carousel slide" data-ride="carousel">
			{{--  <!--
			<ol class="carousel-indicators">
				<li data-target="#carouselIndex" data-slide-to="0" class="active"></li>
				<li data-target="#carouselIndex" data-slide-to="1" class=""></li>
				<li data-target="#carouselIndex" data-slide-to="2" class=""></li>
			</ol>-->  --}}
			<div class="carousel-inner">
				<div class="item active" id="ca-1">
					{{--  <!--<img alt="First slide" src="./assets/img/caroussel (1).jpg">
					<div class="container">
						<div class="carousel-caption">
							<h1>Example headline.</h1>
							<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
						</div>
					</div>-->  --}}
				</div>
				<div class="item" id="ca-2">
					{{--  <!--<img alt="Second slide" src="./assets/img/caroussel (2).jpg">
					<div class="container">
						<div class="carousel-caption">
							<h1>Another example headline.</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
						</div>
					</div>-->  --}}
				</div>
				<div class="item" id="ca-3">
					{{--  <!--<img alt="Third slide" src="./assets/img/caroussel (3).jpg">
					<div class="container">
						<div class="carousel-caption">
							<h1>One more for good measure.</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
						</div>
					</div>-->  --}}
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