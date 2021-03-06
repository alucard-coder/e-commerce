<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="bla bla bla">
		<meta name="keywords" content="Mugs">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>
			 Monet
		</title>
		<link rel="shortcut icon" href="img/favicon.png">
		<link href="https://fonts.googleapis.com/
		css2?family=Roboto:wght@100;300;400;500;900&display=swap" rel="
		stylesheet">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="style.css">
		<script src="https://kit.fontawesome.com/f5bc26fabf.js" crossorigin="
		anonymous"></script>
        <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
        <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
  <!-- Daterange picker -->
        <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
  <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <?php 
            session_start();
            $accion=$_REQUEST['accion']??'';
            if($accion=='cerrar'){
                session_destroy();
                header("Refresh:0");
            }
         ?>
	</head>
	<body>
        
		<header>
			<div class="container">
				<a href="index.html">
					<img src="img/logo.jpg" class="logo">
				</a>
                <?php 
                    include_once "menu.php"

                ?>
	
				<a href="#" class="hamb"><i class="fas fa-bars"></i></a>
			</div>
		</header>
		<main>
			<section id="inicio">
				<img src="img/banner.jpg">
				<div class="bloque-inicio">
					<h1>Bienvenidos a Monet</h1>
					<p>Lorem ipsum dolor sit amet consectetur, 
					   adipisicing elit. Expedita deserunt sapiente placeat necessitatibus debitis,
					   eaque, beatae perspiciatis excepturi a accusantium soluta illo ipsum alias
					   delectus architecto fuga. Deserunt, totam quidem!
					</p>
					<a href="#nosotros" class="boton boton-rojo">Ver más
					</a>
				</div>
			</section>
			<section id="nosotros" class="seccion">
				<div class="container">
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat quibusdam odit
					repellat unde sed architecto, harum ex quia veritatis! Asperiores quibusdam nulla 
					e sunt officiis itaque, iure culpa eaque doloremque.
				</div>

			</section>
			<section id="servicios" class="seccion">
				<div class="container">
					<div class="row">
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio.jpg">
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 1</h3>
									<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
									   Debitis, culpa provident? Ducimus rem, nesciunt esse similique 
									   accusantium eligendi enim temporibus quas libero doloremque aut
									   nemo explicabo perferendis eveniet ea aspernatur?</p>
									<a href="producto.php" class="boton boton-blanco">Ver más</a>
								</div>
							</div>
						</div>
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio1.jpg">
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 2</h3>
									<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
									   Debitis, culpa provident? Ducimus rem, nesciunt esse similique 
									   accusantium eligendi enim temporibus quas libero doloremque aut
									   nemo explicabo perferendis eveniet ea aspernatur?</p>
									<a href="#" class="boton boton-blanco">Ver más</a>
								</div>
							</div>
						</div>
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio2.webp">
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 3</h3>
									<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
									   Debitis, culpa provident? Ducimus rem, nesciunt esse similique 
									   accusantium eligendi enim temporibus quas libero doloremque aut
									   nemo explicabo perferendis eveniet ea aspernatur?</p>
									<a href="#" class="boton boton-blanco">Ver más</a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<section id="galeria">
				<div class="container-fluid">
					<div class="row">
						<div class="columna columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/galeria.jpg">
								<h4><a href="producto.php"class="boton boton-blanco">VER PRODUCTO</a></h4>
							</div>
						</div>
						<div class="columna columna-33 columna-mobile-50">
								<div class="cuadrado-perfecto">
									<img src="img/galeria.jpg">
									<h4>Imagen2</h4>
								</div>
						</div>
						<div class="columna columna-33 columna-mobile-50">
								<div class="cuadrado-perfecto">
									<img src="img/galeria1.jpg">
									<h4>Imagen3</h4>
								</div>
						</div>
						<div class="columna columna-33 columna-mobile-50">
								<div class="cuadrado-perfecto">
									<img src="img/galeria2.jpg">
									<h4>Imagen4</h4>
								</div>
						</div>
						<div class="columna columna-33 columna-mobile-50">
								<div class="cuadrado-perfecto">
									<img src="img/galeria3.jpg">
									<h4>Imagen5</h4>
								</div>
						</div>
						<div class="columna columna-33 columna-mobile-50">
								<div class="cuadrado-perfecto">
									<img src="img/galeria4.jpg">
									<h4>Imagen6</h4>
								</div>
						</div>
					</div>
				</div>
			</section>
			<section id="contactenos" class="seccion">
				<iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Arequipa+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
				<div class="container-fluid">
					<div class="row">
						<div class="columna columna-41 columna-mobile-100
						 empujar-58 empujar-mobile-0 sinpadding-mobile">
							<form action="" method="post">
								<div class="form-block">
									<input type="text" name="nombre" class="form-control"
									placeholder="Nombre">
								</div>
								<div class="form-block">
									<input type="email" name="email" class="form-control"
									placeholder="Email">
								</div>
								<div class="form-block">
									<textarea name="mensaje" placeholder="Mensaje"></textarea>
								</div>
								<div class="form-block bloque-ultimo">
									<input type="submit" class="boton boton-negro" name="email" value="Enviar">
								</div>
							</form>
						</div>
					</div>
				</div>

			</section>

		</main>
		<footer>
			<div class="container">
				<div class="row">
					<div class="columna columna-25 columna-mobile-100">
						<img src="img/galeria.jpg" class="logo-footer">
						<p>
							Lorem ipsum dolor sit, amet consectetur adipisicing 
							elit. Consequuntur molestias officiis facere culpa 
							reprehenderit sapiente modi id eum molestiae voluptate
							veniam,repellat reiciendis a magni temporibus esse at,
							 iusto iste.
						</p>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Temas relacionados
						</h3>
						<ul>
							<li><a href="#">Tema 1</a></li>
							<li><a href="#">Tema 2</a></li>
							<li><a href="#">Tema 3</a></li>
						</ul>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Datos de contacto
						</h3>
						<ul>
							<li>snaeguro@gmail.com</li>
							<li>+51915189645</li>
							<li>Av. wiracocha s/n<br>Lima - Perú</li>
						</ul>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Redes Sociales
						</h3>
						<ul class="redes">
							<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="barra-footer">
				&copy; Derechos Reservados - 2021
			</div>
		</footer>
		<script src="js/jquery.js"></script>
		<script src="js/funciones.js"></script>
        <!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="admin/plugins/moment/moment.min.js"></script>
<script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="admin/dist/js/pages/dashboard.js"></script>
	
	</body>
</html>

