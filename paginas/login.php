<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ingreso al sistema</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
	<link href="../css/fontawesome/css/all.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<div class="container" style="background-color:#FAFAFA; padding-top:10px;">
		<header style="text-align: center;">
			<img src="../img/logo01.png" width="300px" height="100px">
			<h2><i class="fa-solid fa-bookmark"></i> Libros y Útiles</h2>
		    <hr>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		    <div class="container-fluid">
		    <a class="navbar-brand" href="inicio.html"></a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNav">
		        <ul class="navbar-nav">
		        <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../inicio.html"><i class="fa-solid fa-house" style=" margin-right: 3px;"></i> <b>Inicio</b></a>
		        </li>
		        <li class="nav-item">
		        	<a class="nav-link" href="../libros.html"><i class="fa-solid fa-book" style=" margin-right: 10px;"></i> Libros</a>
		        </li>		
		        <li class="nav-item">
		        	<a class="nav-link" href="../utiles.html"><i class="fa-solid fa-scissors" style=" margin-right: 10px;"></i> Útiles Escolares</a>
		        </li>
		        <li class="nav-item">
		        	<a class="nav-link" href="../opiniones.html"><i class="fa-solid fa-users" style=" margin-right: 10px;"></i> Opiniones</a>
		        </li>

		        </ul>
		    </div>
		    </div>
        </nav><br>			
	    </header>
	    <br>
	    <section>
				<div class="container" style="width: 50%; border: 1px solid #D3D3D3; border-radius: 10px; padding: 10px;">
					<center><h3><i class="fa-solid fa-circle-user"></i> Inicio de Sesión</h3></center><br>
				    <form name="frmacceso" id="frmacceso" method="post" action="proceso.php">
				      <div class="mb-3">
					    <label for="txtuser" class="form-label">Usuario</label>
					    <input type="text" class="form-control" name="txtuser" id="txtuser">
				      </div>
				      <div class="mb-3">
				        <label for="txtpsw" class="form-label">Contraseña</label>
				        <input type="password" class="form-control" name="txtpsw" id="txtpsw">
				      </div>

				      <button type="submit" name="btnlogin" id="btnlogin" class="btn btn-primary">Enviar</button>
					</form>
	            </div>
	    </section>
		<br>
		<footer>
			<div class="container" style="background-color:#99CCFF; height: 50px; padding-top: 10px;">
			<div class="row">			
					<div class="col-sm-4" style="text-align: center; font-weight: bold;"><i class="fa-solid fa-bookmark"></i> COLLEGH</div>
					<div class="col-sm-8" style="text-align: center; font-style: italic;"><i class="fa-regular fa-copyright"></i> Copyright -@Derechos Reservados 2022</div>	
				</div>			
			</div>			
		</footer>
    </div>
</body>
</html>