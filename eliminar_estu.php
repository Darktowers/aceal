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
    <?php
                    $borrar = "DELETE FROM estudiantes WHERE cedula = '".$cedula."'";

														$resultado = mysqli_query($mysql, $borrar)
															or die ("Error al insertar los registros");

														mysqli_close($mysql); 
														echo "Los datos fueron borrados correctamente";
    ?>
	
<a href="docente.php"><button class="btn-normal b_azul">Volver</button>
</div>
</div>


<?php
include_once("footer.php");
}else{
    echo '<script> window.location="index.php"; </script>';
}
?>