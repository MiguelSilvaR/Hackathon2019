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
							<a href="profile.php" class="nav-link" id="btn-acerca-de">Mi perfil</a>
						</li>
						<li class="nav-item">
							<a href="networking.php" class="nav-link" id="btn-proyecto">Networking</a>
                        </li>
                        <li class="nav-item espa mr-auto">
							<a href="Mensajes.php" class="nav-link" id="btn-contacto">Mensajes</a>
                        </li>
					</ul>
					<form action="index.php" class="form-inline my-2 my-lg-0">   
                        <button class="btn btn-primary my-2 my-sm-0 mr-2 text-white" type="submit">Salir</button>
					</form> 
				</div>
			</div>
		</nav>
	</header>
    <main>
        <div class="container">
            <div class="row my-3">
                <form action="" class="col-12 form-inline my-2 my-lg-0 d-flex justify-content-center">
						<input class="form-control mr-sm-2 w-50" type="search" placeholder="Buscar">
						<button class="btn btn-info my-2 my-sm-0 " type="submit"><i class="fa fa-search" ></i></button>
				</form>
            </div>
            <div class="row">
                <div class="col-12 border-top">
                    <div class="py-4 border-bottom">
                        <h1 class="text-left mb-4 text-dark">Favoritos</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <img src="img/7.jpg" alt="" class="w-100">
                    <h5  class="text-center mt-2">Compañia Tech</h5  >
                </div>
                <div class="col-9">
                    <div class="d-flex">
                        <h2 class="mb-4 d-inline-block">Tecnología</h2>
                         <a href="" class="ml-auto align-self-center"><i class="fa fa-star"></i></a> 
                    </div>
                    
                    <h5>Descripción:</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Quas non temporibus necessitatibus enim quae libero, ea 
                        placeat magnam aliquam facilis sunt quidem facere atque cum 
                        fuga fugit excepturi, id a?</p>
                    <h6>Subcategorias: Red, Web, Aplicaciones moviles</h6>
                    <div class="d-flex">
                        <a href="" class="btn btn-primary ml-auto">Contactar</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 border-top">
                    <div class="py-4 border-bottom">
                        <h1 class="text-left mb-4 text-dark">Recomendados</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <img src="img/download.jpg" alt="" class="w-100">
                    <h5 class="text-center mt-2">Compañia Contaduria</h5>
                </div>
                <div class="col-9">
                    <div class="d-flex">
                        <h2 class="mb-4 d-inline-block">Contaduria</h2>
                         <a href="" class="ml-auto align-self-center"><i class="fa fa-star"></i></a> 
                    </div>
                    
                    <h5>Descripción:</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Quas non temporibus necessitatibus enim quae libero, ea 
                        placeat magnam aliquam facilis sunt quidem facere atque cum 
                        fuga fugit excepturi, id a?</p>
                    <h6>Subcategorias: Finanzas</h6>
                    <div class="d-flex">
                        <a href="" class="btn btn-primary ml-auto">Contactar</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <img src="img/hr.jpg" alt="" class="w-100">
                    <h5 class="text-center mt-2">Compañia RH</h5>
                </div>
                <div class="col-9">
                    <div class="d-flex">
                        <h2 class="mb-4 d-inline-block">Recursos Humanos</h2>
                         <a href="" class="ml-auto align-self-center"><i class="fa fa-star"></i></a> 
                    </div>
                    
                    <h5>Descripción:</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Quas non temporibus necessitatibus enim quae libero, ea 
                        placeat magnam aliquam facilis sunt quidem facere atque cum 
                        fuga fugit excepturi, id a?</p>
                    <h6>Subcategorias: Contratación</h6>
                    <div class="d-flex">
                        <a href="" class="btn btn-primary ml-auto">Contactar</a>
                    </div>
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