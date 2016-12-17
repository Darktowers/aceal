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

					<input type="text" name="id_estudiante" maxlength="12" placeholder="Cedula" required>
				
				
				
								<select name="materia" id="">
									<option selected value="">Seleccione Materia</option>
										<?php 
											$resultadoxy = mysqli_query($mysql,"SELECT * FROM materias");
											while ($row = mysqli_fetch_array($resultadoxy)) 
											{
												$nombre = utf8_encode($row["nombre_materia"]);
												$id = $row["id"];
												?>
									<option value="<?=$id?>"><?=$nombre?></option>
										<?php
											}
										?>
								</select>
				
					<input type="text" name="semestre" placeholder="Semestre" required>					
				
					<input type="text" name="nota" placeholder="Nota" required>
				
				
					
					<textarea name="descripción" placeholder="ingrese descripción" required></textarea>
				
			</table>
			<input type="submit" class="btn-normal b_azul" value="guardar notas">
		</form>
		<a class="btn-normal b_azul" href="docente.php">Volver</a>
</div>
</div>
<?php
include_once("footer.php");
?>
