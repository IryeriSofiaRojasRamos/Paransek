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

				<li><a href="#inicio">Inicio</a></li>
				<li><a href="#mision">Misión</a></li>
				<li><a href="#vision">Visión</a></li>
				<li><a href="#productos">Productos</a></li>
				<li><a href="#contactos">Redes Sociales</a></li>
			</ul>
		</nav>

<!--
		<section class="inicio" id="inicio" >
			<div class="contenedor">

			</div>
		</section>


		<section class="nosotros" id="nosotros">
			<div class="fila">
				<div class="columna">
					<h2 class="tituloDeSeccion"><span>N</span>uestra<span> H</span>istoria</h2><br>
					<p>
					</p>
				</div>
				<div class="columna">
					<div class="imagen">
						<img src="imgHomeClientes/historia.jpeg"> 
					</div>
				</div>
			</div>
			<div class="fila">
				<div class="columna">
					<h2 class="tituloDeSeccion"><span>M</span>isión</h2><br>
					<p>
					</p>
				</div>
				<div class="columna">
					<div class="imagen">
						<img src="imgHomeClientes/mision.jpeg">
					</div>
				</div>
			</div>
		</section>


    	<section class="profesionales" id="profesionales">
			<div class="title tituloProfesionales">
				<h2 class="tituloDeSeccion"><span>P</span>rofesionales</h2>
				<p>
					Nuestro laboratorio VIDAlab cuenta con especialistas en el área.
				</p>
			</div>
		</section>
-->
	</body>

</html>