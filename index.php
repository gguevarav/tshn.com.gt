<!DOCTYPE html>
<html>
<head>
	<title>TSHN - Tecnología para todos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
		<nav class="blue-grey darken-4">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo">TSHN</a>
					<a href="#" data-target="mobile-menu" class="sidenav-trigger">
						<i class="material-icons">menu</i>
					</a>
					<ul class="right hide-on-med-and-down">
						<li><a href="#inicio">Inicio</a></li>
						<li><a href="#quienes-somos">Quienes somos</a></li>
						<li><a href="#vision-mision">Nuestra visión y misión</a></li>
						<li><a href="#catalogo-productos">Catálogo de productos</a></li>
						<li><a href="#contacto">Contacto</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<ul class="sidenav" id="mobile-menu">
			<li><a href="#inicio">Inicio</a></li>
			<li><a href="#quienes-somos">Quienes somos</a></li>
			<li><a href="#vision-mision">Nuestra visión y misión</a></li>
			<li><a href="#catalogo-productos">Catálogo de productos</a></li>
			<li><a href="#contacto">Contacto</a></li>
		</ul>
	</header>

	<main>
		<section id="inicio" class="section scrollspy">
			<div class="container">
				<h2 class="center-align">TSHN - Tecnología para todos</h2>
				<p class="center-align">Bienvenidos a TSHN, una empresa dedicada a la venta de productos y servicios relacionados con tecnología. </p>
			</div>
		</section>

		<section id="quienes-somos" class="section scrollspy">
			<div class="container">
				<h3 class="center-align">¿Quiénes somos?</h3>
				<p>Somos una empresa dedicada a ofrecer soluciones tecnológicas de última generación, abarcando desde la infraestructura hasta el desarrollo de aplicaciones.</p>
			</div>
		</section>

		<section id="vision-mision" class="section scrollspy">
			<div class="container">
				<h3 class="center-align">Nuestra visión y misión</h3>
				<div class="row">
					<div class="col s12 m6">
						<div class="card">
							<div class="card-content">
								<h4>Visión</h4>
								<p>Ser líderes en el mercado de soluciones tecnológicas, brindando un servicio de calidad y un trato personalizado a nuestros clientes.</p>
							</div>
						</div>
					</div>
					<div class="col s12 m6">
						<div class="card">
							<div class="card-content">
								<h4>Misión</h4>
								<p>Ofrecer soluciones tecnológicas innovadoras y eficientes, adaptadas a las necesidades de nuestros clientes y acompañarlos en su crecimiento empresarial.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="catalogo-productos" class="section scrollspy">
			<div class="container">
				<h3 class="center-align">Catálogo de productos</h3>
				<div class="row">
					<div class="col s12 m4">
						<div class="card">
							<div class="card-image">
								<img src="img/producto1.jpg">
								<span class="card-title">Producto 1</span>
							</div>
							<div class="card-content">
								<p>Descripción del producto 1.</p>
								<p>Precio: $50</p>
							</div>
							<div class="card-action">
								<a href="#">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col s12 m4">
						<div class="card">
							<div class="card-image">
								<img src="img/producto2.jpg">
								<span class="card-title">Producto 2</span>
							</div>
							<div class="card-content">
								<p>Descripción del producto 2.</p>
								<p>Precio: $100</p>
							</div>
							<div class="card-action">
								<a href="#">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col s12 m4">
						<div class="card">
							<div class="card-image">
								<img src="img/producto3.jpg">
								<span class="card-title">Producto 3</span>
							</div>
							<div class="card-content">
								<p>Descripción del producto 3.</p>
								<p>Precio: $150</p>
							</div>
							<div class="card-action">
								<a href="#">Comprar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

        <section id="contacto" class="section scrollspy">
			<div class="container">
				<h3 class="center-align">Contáctanos</h3>
				<div class="row">
                <form class="col s12" action="enviar.php" method="post">
						<div class="row">
							<div class="input-field col s12 m6">
								<i class="material-icons prefix">account_circle</i>
								<input id="nombre" type="text" class="validate" name="nombre" required>
								<label for="nombre">Nombre</label>
							</div>
							<div class="input-field col s12 m6">
								<i class="material-icons prefix">email</i>
								<input id="email" type="email" class="validate" name="email" required>
								<label for="email">Email</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">mode_edit</i>
								<textarea id="mensaje" class="materialize-textarea" name="mensaje" required></textarea>
								<label for="mensaje">Mensaje</label>
							</div>
						</div>
						<div class="row">
							<div class="col s12">
								<button class="btn waves-effect waves-light" type="submit" name="action">Enviar
									<i class="material-icons right">send</i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>

		<footer class="page-footer grey darken-3">
			<div class="container">
				<div class="row">
					<div class="col s12 l6">
							<h5 class="white-text">TSHN</h5>
							<p class="grey-text text-lighten-4">Somos una empresa líder en soluciones tecnológicas.</p>
					</div>
					<div class="col s12 l4 offset-l2">
						<h5 class="white-text">Enlaces</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="#inicio">Inicio</a></li>
							<li><a class="grey-text text-lighten-3" href="#quienes-somos">Quiénes somos</a></li>
							<li><a class="grey-text text-lighten-3" href="#vision-mision">Visión y misión</a></li>
							<li><a class="grey-text text-lighten-3" href="#catalogo-productos">Catálogo de productos</a></li>
							<li><a class="grey-text text-lighten-3" href="#contacto">Contáctanos</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<!-- Importación de archivos JavaScript -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>