<?php
if($_POST){
	include_once("header.php");	 
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
?>
<div class="container-abso">
	<div class="container-card">
<?php

		$cedula= $_POST['id_estudiante'];
		$materia = $_POST['materia'];
		$nota = $_POST['nota'];
		$semestre = $_POST['semestre'];
		$descripcion = $_POST['descripción'];
		$es=0;
		$do=0;
		$mate=0;
		

		
											$resultadoxy = mysqli_query($mysql,"SELECT * FROM estudiantes WHERE cedula='".$cedula."'");
											while ($row = mysqli_fetch_array($resultadoxy)) 
											{						
												$id = $row["id"];
												$es++;
											}
											$resulta = mysqli_query($mysql,"SELECT * FROM notas_estudiante WHERE semestre='".$semestre."' AND id_materia='".$materia."' AND id_estudiante='".$id."'  ");
											while ($row = mysqli_fetch_array($resulta)) 
											{						
												$mate++;
											}
										
											$resultadox = mysqli_query($mysql,"SELECT * FROM docentes WHERE cedula='".$profile."'");
											while ($row = mysqli_fetch_array($resultadox)) 
											{						
												$id_do = $row["id_docente"];
												
											}
											if($es==0){
												echo "El estudiante no existe";
											}else if($mate > 0){
												echo "El estudiante ya tiene asignada una nota para esa materia y semestre";
											}else{
													$insertar = "INSERT INTO notas_estudiante VALUES (null,'$id', '$materia', '$id_do', '$nota', '$semestre', '$descripcion')";

														$resultado = mysqli_query($mysql, $insertar)
															or die ("Error al insertar los registros");

														mysqli_close($mysql); 
														echo "Los datos fueron ingresados correctamente";
											}
									
	
	?>
	<input type="submit" name="salir" class="btn-normal b_azul"value="Regresar" onclick="window.location='docente.php'">
</div>
</div>
<?php
include_once("footer.php");
}else{
	echo '<script> window.location="docente.php"; </script>';
}
?>