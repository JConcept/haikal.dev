@php
	$bodyId = 'galerie';
	$title = 'Galerie';
@endphp
@extends('layouts.main')
	@section('content')
		<section>
			<h2 role="heading" aria-level="2">Galerie</h2>
		
			{{--  <!-- DÉBUT caroussel -->   --}}
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
				</div>
					<a class="left carousel-control" href="#carousel-id" data-slide="prev"><spanclass="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#carousel-id" data-slide="next"><spanclass="glyphicon glyphicon-chevron-right"></span></a>
			</div>
			{{--  <!-- FIN caroussel -->  --}}
		</section>
	@endsection