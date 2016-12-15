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
	<form name="Guardar"  method="POST" action="guardar.php" class="formulario2 form">
	<center><h5>Ingresar Estudiante</h5></center>		
			<input type="text" name="cedula" maxlength="12" placeholder="ingrese cedula">
			<input type="text" name="nombre" placeholder="ingrese nombre" required>	
			<input type="text" name="apellido" placeholder="ingrese apellido" required>
			<input type="text" name="telefono" placeholder="ingrese telefono" required>
			<input type="text" name="correo" placeholder="ingrese correo" required>
			<input type="text" name="direccion" placeholder="ingrese direccion" required>
			<input type="text" name="grado" placeholder="ingrese carrera" required>
	<div class="wrap">
		<input type="submit" class="btn-normal b_azul" name="guardar" value="Guardar">
		<input type="submit" class="btn-normal b_azul" value="Regresar" onclick="window.location='docente.php'">
	</div>
</form>
</div>
</div>
<?php
include_once("footer.php");
?>