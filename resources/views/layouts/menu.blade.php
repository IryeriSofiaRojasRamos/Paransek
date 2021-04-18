
<link href="{{ asset('./css/estilos/estilo_menu.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">


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

		<li><a href="#inicio">Inicio</a></li>
		<li><a href="#mision">Misión</a></li>
		<li><a href="#vision">Visión</a></li>
		<li><a href="#productos">Productos</a></li>
		<li><a href="#contactos">Redes Sociales</a></li>
	</ul>
</nav>
