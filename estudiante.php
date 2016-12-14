<?php
session_start();
include 'conect.php';

if (isset($_SESSION['id']))
{
	echo "";
}
else
{
	echo '<script> window.location="index.php"; </script>';
}

$profile = $_SESSION['id'];
?>
<?php
include_once("header.php");	 
$resultadox = mysqli_query($mysql,"SELECT * FROM estudiantes WHERE  cedula = '".$profile."'");
while ($row = mysqli_fetch_array($resultadox)) 
{
	$nombre = $row["nombres"];
	$id = $row["id"];
}
?>
<div class="container-abso">

	<h1>Bienvenidó <b><?=$nombre ?></b></h1>
	<div class="container-card">
	<table class="datos_estudiante">
		<tr>
			<td colspan="6">Datos Estudiante</td>
		</tr>
		<tr>

			<th>cedula</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Grado</th>
			<th>Sede</th>


		</tr>
		<?php
		 
		$resultado = mysqli_query($mysql,"SELECT sedes.nombre_sede,estudiantes.nombres,grado,cedula,apellidos FROM `estudiantes`,`sedes` WHERE sedes.id = estudiantes.id_sede AND cedula = '".$profile."'");
		while ($row = mysqli_fetch_array($resultado)) 
		{ ?>
			<tr>
				<td><?php echo $row["cedula"]?></td>
				<td><?php echo $row["nombres"]?></td>
				<td><?php echo $row["apellidos"]?></td>
				<td><?php echo $row["grado"]?></td>
				<td><?php echo $row["nombre_sede"]?></td>       
			</tr>
		<?php
		}
		?>
	</table> 
	<button class="btn-normal b_azul notas">Ver Notas</button>
	
		<table class="notas_estudiante">
		<tr>
			<td colspan="6">Notas Estudiante</td>
		</tr>
		<tr>
			<th>Profesor</th>
			<th>Materia</th>
			<th>Semestre</th>
			<th>Nota</th>
		</tr>
		<?php
		 
		$resultado = mysqli_query($mysql,"SELECT materias.nombre_materia,estudiantes.nombres,docentes.nombre_docente,nota,semestre FROM `estudiantes`,`materias`,`docentes`,`notas_estudiante` WHERE notas_estudiante.id_estudiante = estudiantes.id AND notas_estudiante.id_materia = materias.id AND notas_estudiante.id_docente = docentes.id_docente AND id_estudiante = '".$id."' ORDER BY semestre");
		while ($row = mysqli_fetch_array($resultado)) 
		{ ?>
			<tr>
				<td><?php echo $row["nombre_docente"]?></td>
				<td><?php echo $row["nombre_materia"]?></td>
				<td><?php echo $row["semestre"]?></td> 
				<td><?php echo $row["nota"]?></td>        
			</tr>
		<?php
		}
		?>
	</table> 
	<button class="btn-normal b_azul datos">Ver Datos</button>
<a href="salir.php"><button class="btn-normal b_azul">Salir</button>
</div>
</div>


<?php
include_once("footer.php");
?>