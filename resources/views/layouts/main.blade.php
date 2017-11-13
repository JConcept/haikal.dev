@include('partials.htmlTemplateHeader')
<body id="{{ $bodyId }}">
	@include('partials.navMenu')
	<div class="main menu-close">	
		<div id="head-container">
			@include('partials.header')
		</div>
		@yield('content')
		@include('partials.footer')
	</div>
	<script type="text/javascript" src="{{ url('js/app.js') }}"></script>
	<script>
		$(document).ready(function () {
			$('#nav-{{ $bodyId }} a').addClass('active');
			if('{{ $bodyId }}' == 'peintures' || '{{ $bodyId }}' == 'photos' || '{{ $bodyId }}' == 'videos'){
				$('#nav-galerie').addClass('active');
			}
		});
	</script>
</body>
</html>