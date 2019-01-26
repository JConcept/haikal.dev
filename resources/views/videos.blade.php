@php
	$bodyId = 'videos';
	$title = 'Vidéos';
@endphp
@extends('layouts.main')
@section('content')
	<section>
		<h2 role="heading" aria-level="2">Vidéos</h2>
		{{--  @TODO : Mettre les bons id vidéos  --}}
		<div class="youtube_videos">
			<div class="youtube" id="7X8II6J-6mU"></div>
			<div class="youtube" id="L0UnpSAD1WY"></div>
			<div class="youtube" id="RH_V2rtFqYM"></div>
			<div class="youtube m" id="aVS4W7GZSq0"></div>
			<div class="youtube" id="CQIqub9HCnk"></div>
			<div class="youtube" id="vbBKrKSJU4w"></div> 
			<div class="youtube" id="PnaW5Ptx81I"></div>
			<div class="youtube" id="Kv9m8jPnXtw"></div>
		</div>
		{{--  @TODO : styliser le bouton play : https://codepen.io/ryanfitton/pen/paggdY  --}}
		{{--  Génération de la miniature manuelle :
		<div class="youtube_videos">
			<div class="youtube" id="cZM3UNR3-Mg">
				<img src="http://lorempixel.com/output/380/250">
			</div>
			<div class="youtube" id="fsjfEbDxcrc">
				<img src="http://lorempixel.com/output/381/250">
			</div>
			<div class="youtube" id="xS_A8bkO8GQ">
				<img src="http://lorempixel.com/output/382/250">
			</div>
			<div class="youtube" id="EmdEhn7Sf40">
				<img src="http://lorempixel.com/output/383/250">
			</div>
			<div class="youtube" id="4NckFt4Bu0Q">
				<img src="http://lorempixel.com/output/384/250">
			</div>
			<div class="youtube" id="JIVkN2KsvGU">
				<img src="http://lorempixel.com/output/385/250">
			</div>
			<div class="youtube" id="XSTGMNMdFac">
				<img src="http://lorempixel.com/output/386/250">
			</div>
			<div class="youtube" id="-ADp-gb92bw">
				<img src="http://lorempixel.com/output/387/250">
			</div>
		</div>  --}}
	</section>
@endsection