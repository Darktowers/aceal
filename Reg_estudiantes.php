<?php
session_start();
include 'conect.php';


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
	<link rel="stylesheet" href="estilo/diseño.css">
	<title>Registrar Estudiantes</title>
</head>
<body>
	<form name="Guardar" method="POST" action="guardar.php" class="formulario2">
	<center><h2>Ingresar Estudiante</h2></center>
	<table>
		<tr>
			<td align="left">Cedula:</td>
			<td><input type="text" name="cedula" maxlength="12" placeholder="ingrese cedula"></td>
		</tr>
		<tr>
			<td>Nombres:</td>
			<td><input type="text" name="nombre" placeholder="ingrese nombre" required></td>
		</tr>
		<tr>
			<td>Apellidos:</td>
			<td><input type="text" name="apellido" placeholder="ingrese apellido" required></td>
		</tr>
		<tr>
			<td>telefono:</td>
			<td><input type="text" name="telefono" placeholder="ingrese telefono" required></td>
		</tr>
		<tr>
			<td>Correo:</td>
			<td><input type="text" name="correo" placeholder="ingrese correo" required></td>
		</tr>
		<tr>
			<td>Direccion:</td>
			<td><input type="text" name="direccion" placeholder="ingrese direccion" required></td>
		</tr>
		<tr>
			<td>Grado:</td>
			<td><input type="text" name="grado" placeholder="ingrese carrera" required></td>
		</tr>
		<?php
		include('conect.php');
		$consulta="select id,nombre_sede from sedes order by nombre_sede asc";
		$result=mysql_query($consulta);
		?>
		<tr>
		<td>
		<label>Seleccionar <br> Sede:</label>
		</td>
		<td>
		<select name="sedes" align="right">
			<option value="">Seleccionar</option>
			<?php
				while ($fila=mysql_fetch_row($result)) {
					echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
				}
			?>
		</select>
		</td>
		</tr>
	</table>
	<input type="submit" name="guardar" value="Guardar">
	<input type="submit" value="Regresar" onclick="window.location='docente.php'">
</form>
</body> 
</html>