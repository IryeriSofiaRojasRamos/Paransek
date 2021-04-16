<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<link rel="icon" type="image/jpg" href="./fondos/icono.jpg"/>
		
		<!--HOLAS DE ESTILO-->
			<link href="{{ asset('./css/estilo_menu.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
			
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
			<script src="js/bootstrap.min.js"></script>
		
		<title>PARANSEK</title>
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

				<li><a href="">Paransek</a></li>
				<li><a href="">Atrapasueños</a></li>
				<li><a href="">Bolsas de compras</a></li>
				<li><a href="">Tarjeteros</a></li>
				<li><a href="">Contactos</a></li>
			</ul>
		</nav>

	</body>

</html>