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
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="estilo/diseño.css">
	<title>Consulta de Materias</title>
</head>
<body>
<form class="formulario7">
<h2>Consulta de Materias</h2>
	<table border="3">
		<tr>
			<td colspan="6">Datos Estudiante</td>
		</tr>
		<tr>
			<td>Id Estudiante</td>
			<td>Nombre</td>
			<td>Grado</td>
			<td>Sede</td>
		</tr>
		<?php
		$resultado = mysql_query("SELECT * FROM estudiantes WHERE id");
		while ($row = mysql_fetch_array($resultado)) 
		{ ?>
			<tr>
				<td><?php echo $row["id"]?></td>
				<td><?php echo $row["nombres"]?></td>
				<td><?php echo $row["grado"]?></td>
				<td><?php echo $row["id_sede"]?></td>
			</tr>
		<?php
		}
		?>
	</table>
	</form>
	<hr></hr>
	<form class="formulario7">
	<table border="2">
		<tr>
			<td colspan="3">Datos Materias</td>
		</tr>
		<tr>
			<td>id Materia</td>
			<td>Nombre Materia</td>
			<td>Nota</td>
			<td>Descripción</td>
		</tr>
		<?php
		$resultado = mysql_query("SELECT * FROM materias WHERE id");
		while ($row = mysql_fetch_array($resultado)) 
		{ ?>
			<tr>
				<td><?php echo $row["id"]?></td>
				<td><?php echo $row["nombre_materia"]?></td>
				<td><?php echo $row["Nota"]?></td>
				<td><?php echo $row["descripcion"]?></td>
			</tr>
		<?php
		}
		?>
	</table>
	</form>
	<hr></hr>
	<input type="submit" value="salir" onclick="window.location='docente.php'" />
</body>
</html>