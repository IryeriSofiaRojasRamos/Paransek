<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<link rel="icon" type="image/jpg" href="./fondos/icono.jpg"/>
		
		<!--HOLAS DE ESTILO-->
			<link href="{{ asset('./css/estilo_menu.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
		
		<title>PARANSEK</title>
	</head>

	<body>

		<input type="checkbox" id="check">
		
		<label for="check">
			<img src="./imagenes/menugif.gif">
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

				<li><a href="">Paransek</a></li>
				<li><a href="">Atrapasueños</a></li>
				<li><a href="">Bolsas de compras</a></li>
				<li><a href="">Tarjeteros</a></li>
				<li><a href="">Contactos</a></li>
			</ul>
		</nav>
		
	</body>

</html>