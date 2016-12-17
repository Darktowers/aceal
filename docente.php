<?php
session_start();
include 'conect.php';

if (isset($_SESSION['user'])) 
{
	echo "";
}
else
{
	echo '<script> window.location="index.php"; </script>';
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

	<a href="Reg_materias.php" class="btn-normal b_azul">Registrar notas</a> 
	<a href="Reg_estudiantes.php" class="btn-normal b_azul">Registrar estudiantes</a>
	<form action="update.php" class="form" method="POST">
		<label for="">Buscar Estudiante</label>
		<input type="text" name="cedula" placeholder="Cedula">
		<input type="submit" class="btn-normal b_azul" value="Buscar">
	</form> 
	<a href="salir.php" class="btn-normal b_azul">Cerrar Sesion</a>


</div>
</div>


<?php
include_once("footer.php");
?>
