


<?php
if($_POST){


	include_once("header.php");	 
?>
<div class="container-abso">
	<div class="container-card">
<?php

	include 'conect.php';

		$cedula = $_POST['cedula'];
		$nombres = $_POST['nombre'];
		$apellidos = $_POST['apellido'];
		$telefono = $_POST['telefono'];
		$correo = $_POST['correo'];
		$direccion = $_POST['direccion'];
		$grado = $_POST['grado'];
		$id_sede = $_POST['sedes'];
		$test = true;
					$resultadox = mysqli_query($mysql,"SELECT * FROM estudiantes");
					while ($row = mysqli_fetch_array($resultadox)) 
					{
						$cedulax = $row["cedula"];
						if($cedulax == $cedula){
							echo "El estudiante ya existe";
							$test = false;
						}else{
							
						}

					}
					if($test == true){
						$resultado = mysqli_query($mysql,"INSERT INTO estudiantes VALUES (null,'$cedula', '$nombres', '$apellidos', '$telefono', '$correo', '$direccion', '$grado', $id_sede)");
							mysqli_close($mysql);
							echo "Los datos fueron ingresados correctamente";
					}


	?>


	<input type="submit" name="salir" value="Regresar" class="btn-normal b_azul" onclick="window.location='docente.php'">
</div>
</div>
<?php
include_once("footer.php");
}else{
	echo '<script> window.location="docente.php"; </script>';
}
?>