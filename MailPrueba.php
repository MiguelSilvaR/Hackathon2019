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
		<!-- Contenido del correo -->
		<div class="row align-items-center mb-5 p-5">
			<div class="col-8 p-5">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
					<fieldset>
						<legend>Empresa</legend>
						<h3>
							
						</h3>
						<p>
							<label>Destinatario</label>
							<input type = "text" name = "destinatario" value="">
				 		</p>
		 				<p>
						   	<label>Asunto</label>
						   	<input type = "text" name = "asuntoV">
						</p>
				 		<p>
					   		<label>Mensaje</label>
						   	<textarea name = "miMensaje" rows = "3" cols = "70" value = ""></textarea>
						</p>
						<p>
							<input type="submit" name="submit" value="Submit" class="btn btn-primary">
						</p>
					</fieldset>
				</form>
				<?php 
				if (isset($_POST['submit'])){
					if($_POST['destinatario']!=""){
						$mailDestino = $_POST['destinatario'];

						if ($_POST['asuntoV']!=""){
							$asunto = $_POST['asuntoV'];
							if ($_POST['miMensaje']!=""){
								$mensaje = $_POST['miMensaje'];
								$mensaje = wordwrap($mensaje, 70, "\r\n");
								mail($mailDestino, $asunto, $mensaje);
								echo "Email enviado con éxito a ",$mailDestino;
							}
							else
								echo "Agregue un texto válido antes de hacer click en submit";
						}
						else
							echo "Agregue un asunto antes de hacer click en submit";
					}
					else
						echo "Agregue un destinatario antes de hacer click en submit";
				}
				else {
					echo "Ingrese todos los datos antes de hacer click en Submit";
				}
				?>
			</div>
			<div class="col-4 w-100">
				<img src="img/mail.jpg" alt="" height="400">
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