@php
	$bodyId = 'peintures';
	$title = 'Peintures';
@endphp
@extends('layouts.main')
	@section('content')
		<section>
			<h2 role="heading" aria-level="2">Peintures</h2>
			{{--  <!-- Modal -->  --}}
			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog modal-content">
					{{--  @TODO : Remplacer le contenu dynamiquement en PHP ou JS  --}}
					<header class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						{{--  @TODO : Ajouter les flèches précédent suivant  --}}
					</header>
					<section class="modal-body">
						<img src="/img/peintures/tableau-1.jpg" alt="">
						<h3 class="modal-title">Titre @TODO</h3>
						<p>Petit texte explicatif de la peinture @TODO.</p>
					</section>
					<footer class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
					</footer>
				</div>
			</div>
			{{--  <!-- END Modal -->  --}}
			<div role="tabpanel">
				{{--  <!-- Nav tabs -->  --}}
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#nouvelles" aria-controls="nouvelles" role="tab" data-toggle="tab">Nouvelles</a>
					</li>
					<li role="presentation">
						<a href="#anciennes" aria-controls="anciennes" role="tab" data-toggle="tab">Anciennes</a>
					</li>
				</ul>
				{{--  <!-- END Nav tabs -->  --}}
				<div class="tab-content">
					{{--  <!-- Tab panes 1 -->  --}}
					<div role="tabpanel" class="tab-pane active" id="nouvelles">
						<div id="gallery">
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 2 / span 2;" >
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								<img src="/img/peintures/tableau-1.jpg" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" alt="" style="grid-area: span 1 / span 4;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								<img src="/img/peintures/tableau-2.jpg" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 1 / span 2;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								<img src="/img/peintures/tableau-3.jpg" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 1 / span 2;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								<img src="/img/peintures/tableau-4.jpg" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 4 / span 2;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								<img src="/img/peintures/tableau-9.jpg" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 1 / span 2;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								<img src="/img/peintures/tableau-5.jpg" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 1 / span 3;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								<img src="/img/peintures/tableau-6.jpg" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 1 / span 3;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								<img src="/img/peintures/tableau-7.jpg" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 1 / span 2;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								<img src="/img/peintures/tableau-8.jpg" alt="">
							</section>							
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 1 / span 2;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								<img src="/img/peintures/tableau-10.jpg" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 1 / span 2;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								<img src="/img/peintures/tableau-11.jpg" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 2 / span 1;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								<img src="/img/peintures/tableau-12.jpg" alt="">
							</section>
						</div>
					</div>
					{{--  <!-- END Tab panes 1 -->  --}}
					{{--  <!-- Tab panes 2 -->  --}}
					<div role="tabpanel" class="tab-pane" id="anciennes">
						<div id="gallery">
							<section class="column"  data-toggle="modal" data-target="#myModal" data-toggle="modal" data-target="#myModal" style="grid-area: span 2 / span 2;" >
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								{{--  <img src="https://picsum.photos/3264/2176" alt="">  --}}
								<img src="http://lorempixel.com/450/275/abstract/" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" alt="" style="grid-area: span 1 / span 4;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								{{--  <img src="https://picsum.photos/2911/652" alt="">  --}}
								<img src="http://lorempixel.com/1810/275/abstract" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 1 / span 2;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								{{--  <img src="https://picsum.photos/2873/586" alt="">  --}}
								<img src="http://lorempixel.com/900/275/abstract" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 1 / span 2;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								{{--  <img src="https://picsum.photos/3264/562" alt="">  --}}
								<img src="http://lorempixel.com/901/275/abstract" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 4 / span 2;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								{{--  <img src="https://picsum.photos/2136/2089" alt="">  --}}
								<img src="http://lorempixel.com/455/400/abstract" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 1 / span 2;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								{{--  <img src="https://picsum.photos/3210/718" alt="">  --}}
								<img src="http://lorempixel.com/902/275/abstract" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 1 / span 3;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								{{--  <img src="https://picsum.photos/3264/747" alt="">  --}}
								<img src="http://lorempixel.com/1383/275/abstract" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 1 / span 3;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								{{--  <img src="https://picsum.photos/3264/500" alt="">  --}}
								<img src="http://lorempixel.com/1384/275/abstract" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 1 / span 2;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								{{--  <img src="https://picsum.photos/3264/495" alt="">  --}}
								<img src="http://lorempixel.com/903/275/abstract" alt="">
							</section>							
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 1 / span 2;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								{{--  <img src="https://picsum.photos/1991/1971" alt="">  --}}
								<img src="http://lorempixel.com/904/275/abstract" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 1 / span 2;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								{{--  <img src="https://picsum.photos/2335/2139" alt="">  --}}
								<img src="http://lorempixel.com/960/275/abstract" alt="">
							</section>
							<section class="column"  data-toggle="modal" data-target="#myModal" style="grid-area: span 2 / span 1;">
								<div class="hover">			
									<div class="content">
										<div class="more"></div>
										<h3>Titre</h3>
									</div>		
								</div>
								{{--  <img src="https://picsum.photos/2713/2008" alt="">  --}}
								<img src="http://lorempixel.com/460/275/abstract" alt="">
							</section>
						</div>
					</div>
					{{--  <!-- END Tab panes 2 -->  --}}
				</div>
			</div>
		</section>
	@endsection