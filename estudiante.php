<?php
session_start();
include 'conect.php';

if (isset($_SESSION['id']))
{
	echo "";
}
else
{
	echo '<script> window.location="principal.php"; </script>';
}

$profile = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo/diseño.css">
	<meta charset="utf-8"/>
	<title>Estudiante</title>
</head>
<body>
<form class="formulario7">
	<h3>Bienvenidó estudiante</h3>
	<table border="3">
		<tr>
			<td colspan="6">Datos Estudiante</td>
		</tr>
		<tr>
			<td>Id</td>
			<td>cedula</td>
			<td>Nombres</td>
			<td>Apellidos</td>
			<td>Grado</td>
			<td>Sede</td>
			<td>nombre materia</td>
			<td>Nota</td>
			<td>nombre docente</td>

		</tr>
		<?php
		$resultado = mysql_query("SELECT * FROM estudiantes WHERE cedula = '".$profile."'");
		while ($row = mysql_fetch_array($resultado)) 
		{ ?>
			<tr>
				<td><?php echo $row["id"]?></td>
				<td><?php echo $row["cedula"]?></td>
				<td><?php echo $row["nombres"]?></td>
				<td><?php echo $row["apellidos"]?></td>
				<td><?php echo $row["grado"]?></td>
				<td><?php echo $row["id_sede"]?></td>       
			</tr>
		<?php
		}
		?>
	</table> 
</form>
<a href="salir.php"><button>Salir</button>
</body>
</html>