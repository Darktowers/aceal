<?php
session_start();
include 'conect.php';

if (isset($_SESSION['user'])) 
{
	echo "";
}
else
{
	echo '<script> window.location="principal.php"; </script>';
}

$profile = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo/diseño.css">
	<meta charset="utf-8"/>
	<script src="ingreso.js"></script>
	<title>Ingreso Principal</title>
</head>
<body>
<form class="formulario4">
	<center><h1>Bienvenido a Aceal APP</h1></center>
	<hr></hr>
	<form>
	<input type="button" name="reg_nota" value="Registrar Notas" onclick="window.location='Reg_materias.php'"></input>
	</form>
	<br>
	<form class="formulario3">
		<input type="button" name="reg_estu" value="Registrar Estudiante" onclick="window.location='Reg_estudiantes.php'"></input>
	</form>
</body>
<hr></hr>
<body>
	<form action="eliminar.php" method="POST" class="formulario5">
		Id: <input type="text" name="id"><br></br>
		<input type="submit" value="Eliminar Registro" name="eliminar">
	</form>
</body>
<hr></hr>
<body>
	<form action="materias.php" method="POST">
		<input type="submit" value="materias" onclick="window.location='materias.php'" />
	</form>
</body>
<hr></hr>
<body>
	<a href="salir.php"><button>Salir</button></center>
</body>
</form>
</html>
