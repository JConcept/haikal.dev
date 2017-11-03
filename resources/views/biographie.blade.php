@php
	$bodyId = 'biographie';
	$title = 'Biographie';
@endphp
@extends('layouts.main')
	@section('content')
		<section>
			<h2 role="heading" aria-level="2">Biographie</h2>
			
				{{--  <!-- DÉBUT section-1 présentation -->  --}}
				<section id="presentation">
					<h3 role="heading" aria-level="3">Présentation</h3>
						<img id="artiste" src="{{ url('img/photo.jpg') }}" alt="Photo de l'artiste peintre Nelly Haikal">
						<p>
							Née à Beyrouth en 1957, belge d'origine libanaise, diplômée des Beaux-Arts de Saint Luc Liège en 1981, formatrice en français langue étrangère et animatrice d'ateliers d'art pour adultes immigrés à l'a.s.b.l La Bobine.<br><br>
							Peintre figurative travaillant en atelier et traitant des scènes de rue et des figures humaines expressives. Autres créations, les  incrustations  photographiques dans les peintures, la photographie et les impressions photo selon les techniques alternatives utilisant des pigments,  travaille dans un atelier situé au 37 rue Fraigneux à 4000 Liège.<br>
							Depuis 2016 en association de fait  avec un collectif d’artistes «&nbsp;MEzZe&nbsp;».<br>
						</p>
				</section>
				{{--  <!-- FIN section-1 présentation -->  --}}
		
				{{--  <!-- DÉBUT section-2 démarche -->  --}}
				<section id="demarche">
					<h3 role="heading" aria-level="3" class="h-right">Démarche</h3>
					<img id="artiste2" width="150" src="{{ url('img/nelly-2.jpg') }}" alt="Photo de l'artiste peintre Nelly Haikal">
					<p>
						Munie de mon appareil photo et de ma caméra, je capte des paysages qui me touchent et dans lesquels je construis une vie. De retour dans mon atelier je structure mes images dans un format personnel, dégageant un espace qui respire, et inspire l’imaginaire.
					</p>
					<p>
						Depuis 2012 j’expérimente le montage vidéo, l’image en mouvement.
					</p>
					<p>
						Lors d’un cours sur la beauté, je me souviens avoir dit que la beauté est ce qui est vrai, ce qui touche les sensibilités. Ma démarche est semblable. Je montre ce qui me touche et m’envahit. 
					</p>
				</section>
				<section id="parcours">
					<h3 role="heading" aria-level="3" class="h-center">Parcours</h3>
					{{--  (article.parcour>(div.calendar>img[src='./img/agenda.svg' alt="image décorative de calendrier" width="100"]+p{Aout 93})+div.content>h4[role="heading" aria-level="4"]{Le 5 aout 1993}+p{Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ex, mollis quis lectus a, vehicula cursus nulla. Donec in scelerisque quam, vitae pulvinar magna. Cras placerat consectetur.})*3  --}}
					<article class="parcour">
						<div class="calendar">
							<img class="pull-right" width="100" src="./img/agenda.svg" alt="image décorative de calendrier">
							<p>Aout 93</p>
						</div>
						<div class="content pull-left">
							<h4 role="heading" aria-level="4">Le 5 août 1993</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ex, mollis quis lectus a, vehicula cursus nulla. Donec in scelerisque quam, vitae pulvinar magna. Cras placerat consectetur.</p>
						</div>
						<div class="clear"></div>
					</article>
					<article class="parcour">
						<div class="calendar">
							<img class="pull-left" width="100" src="./img/agenda.svg" alt="image décorative de calendrier">
							<p>Septembre 95</p>
						</div>
						<div class="content pull-right">
							<h4 role="heading" aria-level="4">Le 9 septembre 1995</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ex, mollis quis lectus a, vehicula cursus nulla. Donec in scelerisque quam, vitae pulvinar magna. Cras placerat consectetur.</p>
						</div>
						<div class="clear"></div>
					</article>
					<article class="parcour">
						<div class="calendar">
							<img class="pull-right" width="100" src="./img/agenda.svg" alt="image décorative de calendrier">
							<p>Janvier 07</p>
						</div>
						<div class="content pull-left">
							<h4 role="heading" aria-level="4">Le 1<sup>er</sup> janvier 2007</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ex, mollis quis lectus a, vehicula cursus nulla. Donec in scelerisque quam, vitae pulvinar magna. Cras placerat consectetur.</p>
						</div>
						<div class="clear"></div>
					</article>
				</section>
				{{--  <!-- FIN section-2 démarche -->  --}}
		</section>
	@endsection