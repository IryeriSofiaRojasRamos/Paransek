<!DOCTYPE html>

<html>

	<head>
		<link href="{{ asset('./css/estilo_menu.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
	</head>

	<body>

		<input type="checkbox" id="check">
		
		<label for="check">
			<img src="./imagenes/menu.gif">
		</label>
		
		<nav>
			<ul>

                @if (Route::has('login'))
            	   @auth
						<li><a href="{{ url('/home') }}">Home</a></li>
					@else
						<li><a href="{{ route('login') }}">Iniciar Sesión</a></li>

					@if (Route::has('register'))
						<li><a href="{{ route('register') }}">Registrarme</a><l/i>
					@endif
                	@endauth
                @endif

				<li><a href="">Objetivos</a></li>
				<li><a href="">Misión</a></li>
				<li><a href="">Visión</a></li>
				<li><a href="">Productos</a></li>
				<li><a href="">Redes Sociales</a></li>
			</ul>
		</nav>

	</body>

</html>