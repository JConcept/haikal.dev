@php
	$bodyId = 'peintures';
	$title = 'Peintures';
@endphp
@extends('layouts.main')
	@section('content')
		<section>
			<h2 role="heading" aria-level="2">Peintures</h2>
			<div role="tabpanel">
				{{--  <!-- Nav tabs -->  --}}
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#nouvelles" aria-controls="nouvelles" role="tab" data-toggle="tab">nouvelles</a>
					</li>
					<li role="presentation">
						<a href="#anciennes" aria-controls="anciennes" role="tab" data-toggle="tab">anciennes</a>
					</li>
				</ul>
			
				{{--  <!-- Tab panes -->  --}}
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="nouvelles">

						{{--  <!-- Modal -->  --}}
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog modal-content">
								<header class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									{{--  @TODO : Ajouter les flèches précédent suivant  --}}
								</header>
								<section class="modal-body">
									<img src="./img/peintures/tableau (1).jpg" alt="">
									<h3 class="modal-title">Titre 1</h3>
									<p>Petit texte explicatif de la peinture.</p>
								</section>
								<footer class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
								</footer>
							</div>

						</div>
						<div class="wrapper">
							<section class="column" data-toggle="modal" data-target="#myModal">
								<div class="inner"></div>
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre 1</h3>		
								</div>
							</section>
							<section class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre 2</h3>
								</div>
								<div class="inner"></div>
							</section>
							<section class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre 3</h3>			
								</div>
								<div class="inner"></div>
							</section>
							<section class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</section>
							<section class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</section>
							<section class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</section>
							<section class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</section>
							<section class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</section>
							<section class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</section>
							<section class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</section>
							<section class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</section>
							<section class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</section>
						</div>

					</div>
					<div role="tabpanel" class="tab-pane" id="anciennes">

						<div class="wrapper">
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="inner"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	@endsection