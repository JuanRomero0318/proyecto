<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title></title>
</head>
<body>
	<header class="header">
			<a href="#">logo</a>
			<div class="menuToggle" onclick=" toggleMenu();" style="background-image: url('menu.png');"></div>
			<ul class="Secciones">
				<li><a href="#home">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#instrucciones">Instrucciones</a></li>
				<li><a href="#contact">Contact us</a></li>
			</ul>
	</header>
	<section class="home" id="home">
		<div class="container">
			<div class="registro" id="registro" style="display: none;">
				<h3>Informacion personal</h3>
			<form action="conexion.php" method="post">
				<input type="text" name="tipo" id="tipo" class="tipo" placeholder="tipo de documento">
				<input type="text" name="numero" id="numero" class="numero" placeholder="numero de documento">
				<select name="opcion">
					<option>Tercera Edad</option>
					<option>discapacidad fisica</option>
				</select>
				<input type="text" name="eps" id="eps" class="eps" placeholder="eps afiliado(a)">
				<button type="submit" class="btn2">enviar</button>
				<p class="warnings" id="warnings"></p>
				<script>
					$('.btn2').click(function () {
						$('.registro').hide();
					});

					const tipo = document.getElementById("tipo")
					const numero = document.getElementById("numero")
					const eps = document.getElementById("eps")
					const registro = document.getElementById("registro")
					const parrafo = document.getElementById("warnings")	

					registro.addEventListener("submit", e=>{
						
					})

				</script>
			</form>
			</div>
			<h1>Bienvenido(a)</h1>
			<p>Espero estas pagina te sirve<br>(aun es un prototipo asi que faltan varias cosas pero tengo la idea)</p>
			<button class="btn">Reserva tu cita aqui</button>
			<script>
				$('.btn').click(function () {
					$('.registro').show();
				});
			</script>
		</div>	
	</section>
	<section class="about" id="about">
		<div class="row">
			<div class="col50">
				<h2 class="title"><span>A</span>bout Us</h2>
				<h3>¿Para que te sirve?</h3>
				<p>el motivo o funcion de esta pagina es ayudar a las personas discapacitadas(desde niños a adultos) y personas de la tercera edad a agilizar el turno de estas persnas en la eps afiliado.<br>Esto lo hago para ayudarlo debido a su condiciones no con los novitos de que estos tenga ventajas sino beneficiones que los ayuden por lo que padecen o tienen </p>
			</div>
				<div class="col50">
					<div class="imgd">
						<img src="img/doctores.jpg">
					</div>
				</div>	
		</div>
	</section>
	<section class="instrucciones" id="instrucciones">
		<div class="row">
			<div class="col50">
				<div class="imgd">
					<img src="img/home-img.svg">
				</div>	
			</div>
			<div class="col51">
				<h2 class="title"><span>I</span>nstrucciones para reservar cita</h2>
				<ol>
					<li>Pulsar el boton principal(Reserva aqui)</li>
					<li>Escribir tipo de documento</li>
					<li>Su numero de documento</li>
					<li>Seleccionar si es discaoacutado o mayor de edad</li>
					<li>enviar</li>
				</ol>	
			</div>
		</div>
	</section>
	<section class="instrucciones" id="contact">
		<div class="title1">
			<h2 class="title"><span>C</span>ontact Us</h2>
		</div>
		<div class="row">
			<div class="col50">
				<h3 class="title2">Send Message</h3>
				<div class="contactfr">
					<div class="inputb">
						<input type="text" placeholder="nombre">
					</div>
					<div class="inputb">
					<input type="text"  placeholder="email">
					</div>
					<div class="inputb">
						<textarea placeholder="nombre"></textarea>
					</div>
					<div class="inputb">
						<input type="submit"  value="Send">
					</div>
				</div>
			</div>
			<div class="col50">
				<img src="img/book-img.svg">
			</div>
		</div>
	</section>
	<script>
		window.addEventListener('scroll',function(){
			const header = document.querySelector('header');
			header.classList.toggle("sticky", window.scrollY > 0);
		});

		function toggleMenu() {
		  	const menuToggle = document.querySelector('.menuToggle');
		  	const Secciones = document.querySelector('.Secciones');
		  	menuToggle.classList.toggle('active');
		  	Secciones.classList.toggle('active');
		  }

	</script>
</body>
</html>