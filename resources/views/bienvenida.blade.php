<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="./fondos/icono.jpg" />
		
		<link rel="stylesheet" type="text/css" href="./css/estilo_menu.css">
		<title>PARANSEK</title>
	</head>

	<body>

		<input type="checkbox" id="check">
		
		<label for="check">
			<img src="./imagenes/menu.png">
		</label>
		
		<nav>
			<ul>
				<li><a href="">Paransek</a></li>
				<li><a href="">Atrapasueños</a></li>
				<li><a href="">Bolsas de compras</a></li>
				<li><a href="">Tarjeteros</a></li>
				<li><a href="">Contactos</a></li>
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
			</ul>
		
		</nav>
	</body>

</html>