<?php
if($_POST){
	include_once("header.php");	 
?>
<div class="container-abso">
	<div class="container-card">
<?php
	include 'conect.php';

		$id= $_POST['id_estudiante'];
		$nombre_materia = $_POST['nombre_materia'];
		$nota = $_POST['nota'];
		$semestre = $_POST['semestre'];
		$descripcion = $_POST['descripción'];

		$insertar = "INSERT INTO notas_estudiante VALUES (null,'$id', '$nombre_materia', '$nota', '$descripcion')";

		$resultado = mysqli_query($mysql, $insertar)
			or die ("Error al insertar los registros");

		mysqli_close($mysql); 
		echo "Los datos fueron ingresados correctamente";
	?>
	<br><br>
	<input type="submit" name="salir" value="Regresar" onclick="window.location='docente.php'">
</body>
</html>