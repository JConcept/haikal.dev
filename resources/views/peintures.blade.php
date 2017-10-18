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
						<a href="#paysage" aria-controls="paysage" role="tab" data-toggle="tab">Paysage</a>
					</li>
					<li role="presentation">
						<a href="#portrait" aria-controls="portrait" role="tab" data-toggle="tab">Portrait</a>
					</li>
				</ul>
			
				{{--  <!-- Tab panes -->  --}}
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="paysage">

						<div class="wrapper">
							<div class="column">
								<div class="inner"></div>
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre 1</h3>		
								</div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre 2</h3>
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre 3</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
							<div class="column">
								<div class="hover">			
									<div class="more"></div>
									<h3>Titre X</h3>			
								</div>
								<div class="inner"></div>
							</div>
						</div>

					</div>
					<div role="tabpanel" class="tab-pane" id="portrait">

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