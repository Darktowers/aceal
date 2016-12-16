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
include_once("header.php");	 
$resultadox = mysqli_query($mysql,"SELECT * FROM docentes WHERE  cedula = '".$profile."'");
while ($row = mysqli_fetch_array($resultadox)) 
{
	$nombre = $row["nombre_docente"];
	$id = $row["id_docente"];
}
?>
<div class="container-abso">
	<h1>Bienvenidó <b><?=$nombre ?></b></h1>
	<div class="container-card">
		<form name="Guardar Notas" method="POST" action="guardar_notas.php" class="formulario6 form">
		<center>
			<h5>Ingresar Notas Estudiantes</h5>
		</center>

					<input type="text" name="id_estudiante" maxlength="12" placeholder="Cedula">
				
				
				
					<input type="text" name="nombre_materia" placeholder="Nombres">
				
					<input type="text" name="semestre" placeholder="Semestre">					
				
					<input type="text" name="nota" placeholder="Nota">
				
				
					
					<textarea name="descripción" placeholder="ingrese descripción"></textarea>
				
			</table>
			<input type="submit" class="btn-normal b_azul" value="guardar notas">
		</form>
		<a class="btn-normal b_azul" href="docente.php">Volver</a>
</div>
</div>
<?php
include_once("footer.php");
?>
