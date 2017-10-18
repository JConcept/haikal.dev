@php
	$bodyId = 'videos';
	$title = 'Vidéos';
@endphp
@extends('layouts.main')
	@section('content')
		<section>
			<h2 role="heading" aria-level="2">Vidéos</h2>
			<form method="get" action="" class="btn-group">
				{{--  <!--<label for="" class="dropdown-menu" ></label>-->  --}}
					<select name="photos" class="btn btn-default dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
					<option value="#couleur">couleur</option>
					<option value="#noir-blanc">noir et blanc</option>
					{{--  <!--<span class="caret"></span>-->  --}}
				</select>
			</form>				
			{{--  <!-- DÉBUT caroussel -->   --}}
				<div id="carousel-a" class="carousel slide carousel-sync" data-ride="carousel"data-pause="true">
				<div class="carousel-inner">
					<div class="item active">
						<img src="http://lorempixel.com/output/abstract-q-c-300-200-1.jpg">
					</div>
					<div class="item">
						<img src="http://lorempixel.com/output/abstract-q-c-300-200-2.jpg">
					</div>
					<div class="item">
						<img src="http://lorempixel.com/output/abstract-q-c-300-200-3.jpg">
					</div>
					<div class="item">
						<img src="http://lorempixel.com/output/abstract-q-c-300-200-4.jpg">
					</div>
				</div>		
				<a class="left carousel-control" href="#carousel-a" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-a" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</section>
	@endsection
		{{--  <!-- FIN caroussel -->

		<!-- DÉBUT caroussel 
		<div id="carousel-id" class="carousel slide" data-ride="carousel">
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
		</div> -->
		<!-- FIN caroussel -->  --}}