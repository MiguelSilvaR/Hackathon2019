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
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<title>Mensajes</title>
</head>
<body>
	<script language="javascript">
		var popupWindow = null;
		function centeredPopup(url,winName,w,h,scroll){
			LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
			TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
			settings =
			'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
			popupWindow = window.open(url,winName,settings)
		}
	</script>
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
							<a href="networking.php" class="nav-link">Networking</a>
						</li>
						<li class="nav-item">
							<a href="Mensajes.php" class="nav-link">Mensajes</a>
						</li>
						
					</ul>
					 
				</div>
			</div>
		</nav>
	</header>
	<main class="container">
		<div class="row">
			<div class="col">
				
			</div>
		</div>
		<div class="row" id="acerca-de">
			<div class="col-12">
				<div class="py-4 border-bottom">
					<h1 class="text-center mb-4">Mensajes</h1>
				</div>
			</div>
		</div>
		<div class="row align-items-center mb-2 p-1">
			<div class="col-8 p-3">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
					<fieldset>
						<div>
							<a href="MailPrueba.php" id="EnvMensaje" onclick="centeredPopup(this.href,'myWindow','1200','700','yes');return false">
								<h4>Enviar Mensaje</h4>
							</a>
						</div>
						<div >
						</div>
					</fieldset>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<h4 class="text-center">Recibidos</h4>
				<h5 class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</h5>
			</div>
			<div class="col-6">
				<h4 class="text-center">Enviados</h4>
				<h5 class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</h5>
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