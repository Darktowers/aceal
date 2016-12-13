<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Registro</title>
</head>
<body>
	<h2>Eliminar Registros</h2>
	<?php
		$servidor = "localhost";
		$usuario = "root";
		$contraseña = "";
		$bd = "aceal";

		$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd)
			or die ("Error en la conexion");

		$id=$_POST['id'];

		mysqli_query($conexion, "DELETE from estudiantes WHERE id='$id'")
			or die("Error al eliminar los datos");

		mysqli_close($conexion);
		echo "Datos eliminados correctamente";
	?>
	<br></br>
	<input type="submit" value="Regresar" onclick="window.location='docente.php'">
</body>
</html>