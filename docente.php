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

	<a href="Reg_materias.php" class="btn-normal b_azul">notas</a> 
	<a href="Reg_estudiantes.php" class="btn-normal b_azul">estudiantes</a> 


</div>
</div>


<?php
include_once("footer.php");
?>
