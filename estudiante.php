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
?>
<div class="container-abso">

	<h3>Bienvenidó estudiante</h3>
	<div class="container-card">
	<table>
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
<a href="salir.php"><button class="btn-normal b_azul">Salir</button>
</div>
</div>


<?php
include_once("footer.php");
?>