<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
	<title>Guardar Notas</title>
</head>
<body>
	<?php
		$servidor = "localhost";
		$usuario = "root";
		$contraseña = "";
		$bd = "aceal";

		$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd)
			or die ("Error en la conexion");

		$id= $_POST['id_estudiante'];
		$nombre_materia = $_POST['nombre_materia'];
		$nota = $_POST['nota'];
		$descripcion = $_POST['descripción'];

		$insertar = "INSERT INTO materias VALUES ('$id', '$nombre_materia', '$nota', '$descripcion')";

		$resultado = mysqli_query($conexion, $insertar)
			or die ("Error al insertar los registros");

		mysqli_close($conexion); 
		echo "Los datos fueron ingresados correctamente";
	?>
	<br><br>
	<input type="submit" name="salir" value="Regresar" onclick="window.location='docente.php'">
</body>
</html>