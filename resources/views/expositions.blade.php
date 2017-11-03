@php
	$bodyId = 'expositions';
	$title = 'Expositions';
@endphp
@extends('layouts.main')
	@section('content')
		<section>
			<h2 role="heading" aria-level="2">Évènements</h2>
			
			{{--  <!-- DÉBUT agenda  -->  --}}
			<div class="agenda">
				<div class="table-responsive">
					<table class="table table-condensed table-bordered">
						<thead>
							<tr>
								<th>Date</th>
								<th>Heure</th>
								<th>Évènement</th>
							</tr>
						</thead>
						<tbody>
							{{--  <!-- Single event in a single day -->  --}}
							<tr>
								<td class="agenda-date" class="active" rowspan="1">
									<div class="dayofmonth">26</div>
									<div class="dayofweek">Samedi</div>
									<div class="shortdate text-muted">Juillet, 2000</div>
								</td>
								<td class="agenda-time">
									17h30
								</td>
								<td class="agenda-events">
									<div class="agenda-event">
										<i class="glyphicon glyphicon-repeat text-muted" title="Repeating event"></i> 
										Tous les derniers samedis du mois, expo.
									</div>
								</td>
							</tr>
							
							{{--  <!-- Multiple events in a single day (note the rowspan) -->  --}}
							<tr>
								<td class="agenda-date" class="active" rowspan="3">
									<div class="dayofmonth">31</div>
									<div class="dayofweek">Jeudi</div>
									<div class="shortdate text-muted">Juillet, 2000</div>
								</td>
								<td class="agenda-time">
									8h00 - 9h00 
								</td>
								<td class="agenda-events">
									<div class="agenda-event">
										Inauguration
									</div>
								</td>
							</tr>
							<tr>
								<td class="agenda-time">
									10h15 - 18h00 
								</td>
								<td class="agenda-events">
									<div class="agenda-event">
										Exposition
									</div>
								</td>
							</tr>
							<tr>
								<td class="agenda-time">
									19h00 - 21h00
								</td>
								<td class="agenda-events">
									<div class="agenda-event">
										Clôture et verre de l'amitié
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			{{--  <!-- FIN agenda  -->  --}}
		</section>
	@endsection