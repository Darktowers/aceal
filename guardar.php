<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
	<title>Guardar</title>
</head>
<body>
	<?php
		$servidor = "localhost";
		$usuario = "root";
		$contraseña = "";
		$bd = "aceal";

		$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd)
			or die ("Error en la conexion");

		$cedula = $_POST['cedula'];
		$nombres = $_POST['nombre'];
		$apellidos = $_POST['apellido'];
		$telefono = $_POST['telefono'];
		$correo = $_POST['correo'];
		$direccion = $_POST['direccion'];
		$grado = $_POST['grado'];
		$id_sede = $_POST['sedes'];

		$insertar = "INSERT INTO estudiantes VALUES (id, '$cedula', '$nombres', '$apellidos', '$telefono', '$correo', '$direccion', '$grado', $id_sede)";

		$resultado = mysqli_query($conexion, $insertar)
			or die ("Error al insertar los registros");

		mysqli_close($conexion);
		echo "Los datos fueron ingresados correctamente";
	?>
	<br><br>
	<input type="submit" name="salir" value="Regresar" onclick="window.location='docente.php'">
</body>
</html>