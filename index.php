<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/efectos.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" href="img/favicon.png" sizes="16x16" type="image/png">
    <title>NetBoxing</title>
</head>
<body>

	<header>
		<nav class="navbar navbar-expand-lg navbar-dark fondo-main">
			<div class="container">
				<a href="#" class="navbar-brand">
                    <img src="img/netbox.png" alt="" height="50px">
                </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNavegacion" aria-expanded="false" aria-label="Alterar Menu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="menuNavegacion">
					<ul class="navbar-nav mr-auto">
						<!-- Boton desplegable -->
						<li class="nav-item">
							<a href="" class="nav-link" id="btn-acerca-de">
								Acerca de</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link" id="btn-proyecto">Proyectos</a>
                        </li>
                        <li class="nav-item espa mr-auto">
							<a href="" class="nav-link" id="btn-contacto">Contacto</a>
                        </li>
					</ul>
					 <form action="login.php" class="form-inline my-2 my-lg-0">
                        <button class="btn btn-light my-2 my-sm-0 mr-2 text-dark" type="submit">Log in</button>
                    </form>
                    <form action="registro.html" class="form-inline my-2 my-lg-0">
						<button class="btn btn-primary my-2 my-sm-0" type="submit">Regístrate</button>
					</form>  
				</div>
			</div>
		</nav>
	</header>
    <div class="row mb-5">
        <div class="col">
            <div class="carousel slide" id="slideshow" data-ride="carousel">
                <!-- Indicadores -->
                <ol class="carousel-indicators">
                    <li data-target="#slideshow" class="active" data-slide-to="0"></li>
                    <li data-target="#slideshow" data-slide-to="1"></li>
                    <li data-target="#slideshow" data-slide-to="2"></li>
                </ol>

                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/im1.jpg" alt="" class="d-block w-100">
                        <div class="carousel-caption" style="
                            top: 50%;
                            transform: translateY(-50%);
                            bottom: initial;
                            background: rgba(15, 5, 76, 0.4);
                            border-radius: 25px;
                        ">
                            <h1 class="display-2">NetBoxing</h1>
                            <h4>Conectando emprendedores</h4   >
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/im2.jpg" alt="" class="d-block w-100">
                        <div class="carousel-caption" style="
                            top: 50%;
                            transform: translateY(-50%);
                            bottom: initial;
                            background: rgba(15, 5, 76, 0.4);
                            border-radius: 25px;
                        ">
                            <h1 class="display-2">NetBoxing</h1>
                            <h4>Generando networking</h4   >
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/im3.jpg" alt="" class="d-block w-100">
                        <div class="carousel-caption" style="
                            top: 50%;
                            transform: translateY(-50%);
                            bottom: initial;
                            background: rgba(15, 5, 76, 0.4);
                            border-radius: 25px;
                        ">
                            <h1 class="display-2">NetBoxing</h1>
                            <h4>Crecimiento colectivo</h4   >
                        </div>
                    </div>
                </div>

                <!-- Controles -->
                <a href="#slideshow" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a href="#slideshow" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>
	<main class="container">
		<div class="row" id="acerca-de">
			<div class="col-12">
				<div class="py-4 border-bottom">
                    <h1 class="text-center mb-4">Acerca de</h1>
				</div>
            </div>
        </div>
        <div class="row align-items-center mb-5 p-5">
            <div class="col-8 p-5">
                <p class="text-justify texto">Somos una empresa compremetida
                con desarrollar relaciones laborales entre nuevos emprendedores 
                que busquen socios estratégicos de negocios, que brinden servicios profesionales de utilidad para su empresa, generando redes de networking y empresas modulares funcionales en el siglo XXI </p>
            </div>
            <div class="col-4 w-100">
                <img src="img/network.jpg" alt="">
            </div>
        </div>

        <div class="row" id="proyectos">
			<div class="col-12">
				<div class="py-4 border-bottom">
                    <h1 class="text-center mb-4">Proyectos</h1>
				</div>
            </div>
        </div>
        
		<div class="row py-4 mb-5">
			<div class="col-12 col-sm-6 col-lg-3 mb-4">
				<div class="card">
					<img class="card-img-top" src="img/1.jpg" alt="">
					<div class="card-body">
						<h3 class="card-title">Empresa del sur</h3>
						<p class="card-text text-justify">Logramos que la Empresa del Sur contactara con la empresa de redes.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 mb-4">
				<div class="card">
					<img class="card-img-top" src="img/2.jpg" alt="">
					<div class="card-body">
						<h3 class="card-title">Empresa del Norte</h3>
						<p class="card-text text-justify">Con nuestra red la Empresa del Norte contacto a la empresa de Contaduria.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 mb-4">
				<div class="card">
					<img class="card-img-top" src="img/3.jpg" alt="">
					<div class="card-body">
						<h3 class="card-title">Empresa del Este</h3>
						<p class="card-text text-justify">La empresa del Este trabajo con el startup de Finanzas.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 mb-4">
				<div class="card">
					<img class="card-img-top" src="img/4.jpg" alt="">
					<div class="card-body">
						<h3 class="card-title">Empresa del Oeste</h3>
						<p class="card-text text-justify">La Empresa del Oeste conoció a su socio la Empresa del Sur.</p>
					</div>
				</div>
			</div>
        </div>
        <div class="row redes" id="contacto">
			<div class="col-12">
				<div class="py-4 border-bottom">
                    <h1 class="text-center mb-4 text-light">Contacto</h1>
				</div>
            </div>
        </div>
        <div class="row redes">
            <div class="col d-flex justify-content-around">
                <div class="d-flex justify-content-between w-50">
                    <a class="twitter" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
                    <a class="facebook" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
                    <a class="youtube" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a>
                    <a class="github" href="http://www.github.com"><i class="fa fa-github"></i></a>
                    <a class="instagram" href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
	</main>
	<footer class="container">
		<div class="row border-top py-5">
			<div class="col">
				<h3 class="lead text-center">Copyright NetBoxing Company @ 2019</h3>
            </div>
		</div>
	</footer>
</body>
</html>