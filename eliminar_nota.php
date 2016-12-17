<?php
if($_POST){


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
$cedula= $_POST['cedula'];
?>
<?php
include_once("header.php");	 
$resultadox = mysqli_query($mysql,"SELECT * FROM estudiantes WHERE  cedula = '".$cedula."'");
while ($row = mysqli_fetch_array($resultadox)) 
{
	$nombre = $row["nombres"];
	$id = $row["id"];
}
?>
<div class="container-abso">


	<div class="container-card">

	<div class="notas-estu">
		<table class="notas_estudiante">
		<tr>
			<td colspan="6">Notas Estudiante</td>
		</tr>
		<tr>
			<th>Profesor</th>
			<th>Materia</th>
			<th>Semestre</th>
			<th>Nota</th>
            <th>Actualizar</th>
		</tr>
		<?php
		 
		$resultado = mysqli_query($mysql,"SELECT notas_estudiante.id,materias.nombre_materia,estudiantes.nombres,docentes.nombre_docente,nota,semestre FROM `estudiantes`,`materias`,`docentes`,`notas_estudiante` WHERE notas_estudiante.id_estudiante = estudiantes.id AND notas_estudiante.id_materia = materias.id AND notas_estudiante.id_docente = docentes.id_docente AND id_estudiante = '".$id."' AND docentes.cedula = '".$profile."' ORDER BY semestre");
		while ($row = mysqli_fetch_array($resultado)) 
		{ ?>
			<tr>
				<td><?php echo $row["nombre_docente"]?></td>
				<td><?php echo $row["nombre_materia"]?></td>
				<td><?php echo $row["semestre"]?></td> 
				<td><?php echo $row["nota"]?></td>        
                <td><form method="GET" action="eliminar_nota.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']?>">
                    <input type="submit" value="Eliminar">
                    </form></td>     
			</tr>
		<?php
		}
		?>
	</table> 

    </div>
	
<a href="docente.php" class="btn-normal b_azul">Volver</a>
</div>
</div>


<?php
include_once("footer.php");
}else if($_GET){
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


include_once("header.php");	 

$id = $_GET['id'];

?>
<div class="container-abso">


	<div class="container-card">
<?php
                    $borrar = "DELETE FROM notas_estudiante WHERE id = '".$id ."'";

														$resultado = mysqli_query($mysql, $borrar)
															or die ("Error al insertar los registros");

														mysqli_close($mysql); 
														echo "Los datos fueron borrados correctamente";

?>
<a href="docente.php" class="btn-normal b_azul">Volver</a>
</div>
</div>
<?php
}
?>