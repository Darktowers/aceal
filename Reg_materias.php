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
<meta charset="utf-8" />
	<link rel="stylesheet" href="estilo/diseño.css">
	<title>Registro Notas</title>
</head>
<body>
<form name="Guardar Notas" method="POST" action="guardar_notas.php" class="formulario6">
<h2>Ingresar Notas Estudiantes</h2>
	<table>
		<tr>
			<td>id Estudiante:</td>
			<td><input type="text" name="id_estudiante" maxlength="12" placeholder="ingrese id"></td>
		</tr>
		<tr>
			<td>Nombre Materia:</td>
			<td><input type="text" name="nombre_materia" placeholder="ingrese nombre"></td>
		</tr>
		<tr>
			<td>Nota:</td>
			<td><input type="text" name="nota" placeholder="ingrese nota"></td>
		</tr>
		<tr>
			<td>Descripción:</td>
			<td><input type="text" name="descripción" placeholder="ingrese descripción"></td>
		</tr>
	</table>
	<input type="submit" name="guardar notas" value="guardar notas">
</form>
<input type="submit" name="Regresar" value="Regresar" onclick="window.location='docente.php'">
</body>
</html>