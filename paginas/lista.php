<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ingreso al sistema</title>
	<link href="../css/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
</head>
<body>
		<div class="container" style="background-color: #99CFF; padding-top: 10px;">
		<header style="text-align: center;">
			<img src="../img/logo01.png" width="300px" height="100px">
			<h1>Collegh</h1>
			<hr/>
		</header>
		<nav></nav>
		<section>
			<h1 style="text-align: center;">Listado de productos</h1>
			<?php
				include("conexion.php");
				$cn=new Conexion();
				$cn->ProductMList();
			?>
		</section>
		<footer>
			<div class="container" style="background-color: #99CCFF; height: 50px; padding-top: 10px;">
				<div class="row">
					<div class="col" style="text-align: center; font-weight: bold;"><a style="color: black;">COLLEGH</a></div>
					<div class="col-sm-8" style="text-align: center; font-style: italic;"><a style="color: black;">Copyright - @Derechos Reservados 2022</a></div>	
				</div>	
			</div>
		</footer>				
	</div>

</body>
</html>