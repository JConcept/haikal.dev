@php
	$bodyId = 'photos';
	$title = 'Photos';
@endphp
@extends('layouts.main')
	@section('content')
		<section>
			<h2 role="heading" aria-level="2">Photos</h3>
				<div class="row">
					<div role="tabpanel">
						{{--  <!-- Nav tabs -->  --}}
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active">
								<a href="#couleur" aria-controls="couleur" role="tab" data-toggle="tab">Couleur</a>
							</li>
							<li role="presentation">
								<a href="#noir-blanc" aria-controls="noir-blanc" role="tab" data-toggle="tab">Noir et blanc</a>
							</li>
						</ul>
					
						{{--  <!-- Tab panes -->  --}}
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="couleur">
								
								<article class="col-sm-6 col-lg-3">
									<h3>Titre 1</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione consequatur tenetur sequi voluptatem reiciendis inventore laborum non aperiam quibusdam unde, laudantium at optio nihil. Optio quas quis eius illo ut.</p>
									{{--  <!-- DÉBUT caroussel -->   --}}
									<div id="carousel1" class="carousel slide" data-ride="carousel">
										<ol class="carousel-indicators">
											<li data-target="#carousel1" data-slide-to="0" class="active"></li>
											<li data-target="#carousel1" data-slide-to="1" class=""></li>
											<li data-target="#carousel1" data-slide-to="2" class=""></li>
											<li data-target="#carousel1" data-slide-to="3" class=""></li>
											<li data-target="#carousel1" data-slide-to="4" class=""></li>
											<li data-target="#carousel1" data-slide-to="5" class=""></li>
											<li data-target="#carousel1" data-slide-to="6" class=""></li>
											<li data-target="#carousel1" data-slide-to="7" class=""></li>
											<li data-target="#carousel1" data-slide-to="8" class=""></li>
										</ol>
										<div class="carousel-inner">
											<div class="item active" id="ca-1"></div>
											<div class="item" id="ca-2"></div>
											<div class="item" id="ca-3"></div>
											<div class="item" id="ca-4"></div>
											<div class="item" id="ca-5"></div>
											<div class="item" id="ca-6"></div>
											<div class="item" id="ca-7"></div>
											<div class="item" id="ca-8"></div>
											<div class="item" id="ca-9"></div>
											<style>
												#carousel1 #ca-1{
													background: url("{{ url('img/couleurs/cramignons (1).jpg') }}") no-repeat center;
												}
												#carousel1 #ca-2{
													background: url("{{ url('img/couleurs/cramignons (2).jpg') }}") no-repeat center;
												}
												#carousel1 #ca-3{
													background: url("{{ url('img/couleurs/cramignons (3).jpg') }}") no-repeat center;
												}
												#carousel1 #ca-4{
													background: url("{{ url('img/couleurs/cramignons (4).jpg') }}") no-repeat center;
												}
												#carousel1 #ca-5{
													background: url("{{ url('img/couleurs/cramignons (5).jpg') }}") no-repeat center;
												}
												#carousel1 #ca-6{
													background: url("{{ url('img/couleurs/cramignons (6).jpg') }}") no-repeat center;
												}
												#carousel1 #ca-7{
													background: url("{{ url('img/couleurs/cramignons (7).jpg') }}") no-repeat center;
												}
												#carousel1 #ca-8{
													background: url("{{ url('img/couleurs/cramignons (8).jpg') }}") no-repeat center;
												}
												#carousel1 #ca-9{
													background: url("{{ url('img/couleurs/cramignons (9).jpg') }}") no-repeat center;
												}
											</style>
										</div>
										<a class="left carousel-control" href="#carousel1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
										<a class="right carousel-control" href="#carousel1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
									</div>
									{{--  <!-- FIN caroussel -->  --}}
									<a href="" class="callToAction btn btn-primary">En voir plus</a>
								</article>
								
								<article class="col-sm-6 col-lg-3">
									<h3>Titre 2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione consequatur tenetur sequi voluptatem reiciendis inventore laborum non aperiam quibusdam unde, laudantium at optio nihil. Optio quas quis eius illo ut.</p>
									{{--  <!-- DÉBUT caroussel -->   --}}
									<div id="carousel2" class="carousel slide" data-ride="carousel">
										<ol class="carousel-indicators">
											<li data-target="#carousel2" data-slide-to="0" class="active"></li>
											<li data-target="#carousel2" data-slide-to="1" class=""></li>
											<li data-target="#carousel2" data-slide-to="2" class=""></li>
											<li data-target="#carousel2" data-slide-to="3" class=""></li>
											<li data-target="#carousel2" data-slide-to="4" class=""></li>
											<li data-target="#carousel2" data-slide-to="5" class=""></li>
										</ol>
										<div class="carousel-inner">
											<div class="item active" id="ca-1"></div>
											<div class="item" id="ca-2"></div>
											<div class="item" id="ca-3"></div>
											<div class="item" id="ca-4"></div>
											<div class="item" id="ca-5"></div>
											<div class="item" id="ca-6"></div>
											<style>
												#carousel2 #ca-1{
													background: url('./img/couleurs/livres (1).jpg') no-repeat center;
												}
												#carousel2 #ca-2{
													background: url('./img/couleurs/livres (2).jpg') no-repeat center;
												}
												#carousel2 #ca-3{
													background: url('./img/couleurs/livres (3).jpg') no-repeat center;
												}
												#carousel2 #ca-4{
													background: url('./img/couleurs/livres (4).jpg') no-repeat center;
												}
												#carousel2 #ca-5{
													background: url('./img/couleurs/livres (5).jpg') no-repeat center;
												}
												#carousel2 #ca-6{
													background: url('./img/couleurs/livres (6).jpg') no-repeat center;
												}
											</style>
										</div>
										<a class="left carousel-control" href="#carousel2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
										<a class="right carousel-control" href="#carousel2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
									</div>
									{{--  <!-- FIN caroussel -->  --}}
									<a href="" class="callToAction btn btn-primary">En voir plus</a>
								</article>
								
								<article class="col-sm-6 col-lg-3">
									<h3>Titre 2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione consequatur tenetur sequi voluptatem reiciendis inventore laborum non aperiam quibusdam unde, laudantium at optio nihil. Optio quas quis eius illo ut.</p>
									{{--  <!-- DÉBUT caroussel -->   --}}
									<div id="carousel3" class="carousel slide" data-ride="carousel">
										<ol class="carousel-indicators">
											<li data-target="#carousel3" data-slide-to="0" class="active"></li>
											<li data-target="#carousel3" data-slide-to="1" class=""></li>
											<li data-target="#carousel3" data-slide-to="2" class=""></li>
										</ol>
										<div class="carousel-inner">
											<div class="item active" id="ca-1">
											</div>
											<div class="item" id="ca-2">
											</div>
											<div class="item" id="ca-3">
											</div>
											<style>
												#carousel3 #ca-1{
													background: url('http://lorempixel.com/output/abstract-q-c-1000-400-5.jpg') no-repeat center;
												}
												#carousel3 #ca-2{
													background: url('http://lorempixel.com/output/abstract-q-c-1000-400-6.jpg') no-repeat center;
												}
												#carousel3 #ca-3{
													background: url('http://lorempixel.com/output/abstract-q-c-1000-400-7.jpg') no-repeat center;
												}
											</style>
										</div>
										<a class="left carousel-control" href="#carousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
										<a class="right carousel-control" href="#carousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
									</div>
									{{--  <!-- FIN caroussel -->  --}}
									<a href="" class="callToAction btn btn-primary">En voir plus</a>
								</article>
								
								<article class="col-sm-6 col-lg-3">
									<h3>Titre 2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione consequatur tenetur sequi voluptatem reiciendis inventore laborum non aperiam quibusdam unde, laudantium at optio nihil. Optio quas quis eius illo ut.</p>
									{{--  <!-- DÉBUT caroussel -->   --}}
									<div id="carousel4" class="carousel slide" data-ride="carousel">
										<ol class="carousel-indicators">
											<li data-target="#carousel4" data-slide-to="0" class="active"></li>
											<li data-target="#carousel4" data-slide-to="1" class=""></li>
											<li data-target="#carousel4" data-slide-to="2" class=""></li>
										</ol>
										<div class="carousel-inner">
											<div class="item active" id="ca-1">
											</div>
											<div class="item" id="ca-2">
											</div>
											<div class="item" id="ca-3">
											</div>
											<style>
												#carousel4 #ca-1{
													background: url('http://lorempixel.com/output/abstract-q-c-1000-400-5.jpg') no-repeat center;
												}
												#carousel4 #ca-2{
													background: url('http://lorempixel.com/output/abstract-q-c-1000-400-6.jpg') no-repeat center;
												}
												#carousel4 #ca-3{
													background: url('http://lorempixel.com/output/abstract-q-c-1000-400-7.jpg') no-repeat center;
												}
											</style>
										</div>
										<a class="left carousel-control" href="#carousel4" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
										<a class="right carousel-control" href="#carousel4" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
									</div>
									{{--  <!-- FIN caroussel -->  --}}
									<a href="" class="callToAction btn btn-primary">En voir plus</a>
								</article>
								<div class="clear">&nbsp;</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="noir-blanc">
								<article class="col-sm-6 col-lg-3">
									<h3>Titre 1</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione consequatur tenetur sequi voluptatem reiciendis inventore laborum non aperiam quibusdam unde, laudantium at optio nihil. Optio quas quis eius illo ut.</p>
									{{--  <!-- DÉBUT caroussel -->   --}}
									<div id="carousel5" class="carousel slide" data-ride="carousel">
										<ol class="carousel-indicators">
											<li data-target="#carousel5" data-slide-to="0" class="active"></li>
											<li data-target="#carousel5" data-slide-to="1" class=""></li>
											<li data-target="#carousel5" data-slide-to="2" class=""></li>
											<li data-target="#carousel5" data-slide-to="3" class=""></li>
											<li data-target="#carousel5" data-slide-to="4" class=""></li>
										</ol>
										<div class="carousel-inner">
											<div class="item active" id="ca-1">
											</div>
											<div class="item" id="ca-2">
											</div>
											<div class="item" id="ca-3">
											</div>
											<div class="item" id="ca-4">
											</div>
											<div class="item" id="ca-5">
											</div>
											<style>
												#carousel5 #ca-1{
													background: url('./img/noir-blanc/la-rue/la-rue (1).jpg') no-repeat center;
												}
												#carousel5 #ca-2{
													background: url('./img/noir-blanc/la-rue/la-rue (2).jpg') no-repeat center;
												}
												#carousel5 #ca-3{
													background: url('./img/noir-blanc/la-rue/la-rue (3).jpg') no-repeat center;
												}
												#carousel5 #ca-4{
													background: url('./img/noir-blanc/la-rue/la-rue (4).jpg') no-repeat center;
												}
												#carousel5 #ca-5{
													background: url('./img/noir-blanc/la-rue/la-rue (5).jpg') no-repeat center;
												}
											</style>
										</div>
										<a class="left carousel-control" href="#carousel5" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
										<a class="right carousel-control" href="#carousel5" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
									</div>
									{{--  <!-- FIN caroussel -->  --}}
									<a href="" class="callToAction btn btn-primary">En voir plus</a>
								</article>
							</div>
						</div>
					</div>
				</div>
		</section>
	@endsection