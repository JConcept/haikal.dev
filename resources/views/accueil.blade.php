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
							{{--  {{ $db_pages->text }}  --}}
                    @foreach ($db_pages as $page)
                        {{$page->text}}
                        <!-- on doit rajouter ->body, car on utilise une SGBD -->
                    @endforeach
						<span class="callToAction" class="row">
							<a href="./peintures" class="btn btn-primary pull-left col-md-6 col-sm-6 col-xs-12">Voir mes peintures</a>
							<a href="./biographie" class="btn btn-primary pull-right col-md-6 col-sm-6 col-xs-12">En savoir plus</a>
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