<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/premium.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="icon" href="img/favicon.png" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Perfil</title>
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
							<a href="networkingPremium.php" class="nav-link">Networking</a>
						</li>
						<li class="nav-item">
							<a href="Mensajes.php" class="nav-link">Mensajes</a>
                        </li>
                        <li class="nav-item">
							<a href="profilePremium.php" class="nav-link">Mi perfil</a>
                        </li>
					</ul>
					 <form action="index.php" class="form-inline my-2 my-lg-0">
						<button class="btn btn-primary my-2 my-sm-0" type="submit">Salir</button>
					</form> 
				</div>
			</div>
		</nav>
	</header>
	<main>
        <div class="container">
            <div class="row d-flex align-items-center my-4">
                <div class="col-4">
                    <img src="img/6.jpg" alt="" class="w-75 imagen-foto">
                </div>
                <div class="col-8">
                    <h2 class="d-inline-block">Creative Solutions</h2>
                     <a href="" class="premium"><i class="fa fa-user" ></i>   </a> 
                </div>
            </div>
            <div class="row d-flex mb-5">
                <div class="col-4 align-self-center ">
                    <h2 class="">Descripción</h2>
                </div>
                <div class="col-5">
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Necessitatibus ex dolorum velit corporis repudiandae ab 
                        culpa fuga ut aliquid perspiciatis nihil dolor eius,
                         voluptatem non pariatur placeat, unde ipsum sequi?</p>
                </div>
                <div class="col-3 align-self-top ml-auto p-2">
                    <button class="btn btn-primary my-2 my-sm-0" type="">Editar</button>
                </div>
            </div>
            <div class="row mb-5">
			    <div class="col-4 align-self-top">
				    <div class=" border-bottom">
                        <h2 class="text-left mb-4">Lo que ofreces</h2>
				    </div>
                </div>
                <div class="col-8">
                    <ul class="list-group">
                        <li class="list-group-item">Diseño Web</li>
                        <li class="list-group-item">Diseño Redes</li>
                        <li class="list-group-item">Manejo de bases de datos</li>
                        <li class="list-group-item">Diseño de aplicaciones moviles</li>
                    </ul>
                </div>
            </div>
            <div class="row my-5">
			    <div class="col-4 align-self-top">
				    <div class=" border-bottom">
                        <h2 class="text-left mb-4">Lo que requieres</h2>
				    </div>
                </div>
                <div class="col-8">
                    <p class="text-justify warn text-danger">Aprovecha tu cuenta premium y agenda una cita con nuestro asesor</p>
                    <form action="">
                        <button class="btn btn-primary">Agendar</button>
                    </form>
                </div>
            </div>
            <div class="row my-5">
			    <div class="col d-flex">
                    <form action="networkingPremium.php" class="ml-auto">
                        <button class="btn btn-primary my-2 my-sm-0 " type="submit">Formar Networking</button>
                    </form>
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