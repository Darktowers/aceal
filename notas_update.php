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
if($_POST){
$materia=$_POST["materia"];  
$nombres=$_POST["nombres"];              
$semestre=$_POST["semestre"];  
$nota=$_POST["nota"];  
$id=$_POST["id"]; 



?>
<div class="container-abso">
	<div class="container-card">
		<form name="Guardar Notas" method="GET" action="notas_update.php" class="formulario6 form">
		<center>
			<h5>Actualizar Notas</h5>
		</center>

                    <h6 style="margin:0;">Alumno: <?=$nombres?></h6>
                    <h6 style="margin:0;">Materia: <?=$materia?></h6>
                    <label for="" style="padding:3em 0 0 0;">Semestre</label>
					<input type="text" name="semestre" placeholder="Semestre" value="<?=$semestre?>" required>					
                    <label for="">Nota</label>
					<input type="text" name="nota" placeholder="Nota" value="<?=$nota?>" required>
                    <input type="hidden" name="id" value="<?=$id?>">		
					<textarea name="descripcion" placeholder="ingrese descripción" required></textarea>
				
			</table>
			<input type="submit" class="btn-normal b_azul" value="guardar notas">
		</form>
		<a class="btn-normal b_azul" href="docente.php">Volver</a>
</div>
</div>
<?php
include_once("footer.php");
}else if($_GET){           
$semestre=$_GET["semestre"];  
$nota=$_GET["nota"];  
$id=$_GET["id"]; 
$descripcion=$_GET["descripcion"]; 

    ?>
    <div class="container-abso">
	<div class="container-card">
    <?php
         $update = "UPDATE notas_estudiante SET semestre='$semestre', nota='$nota' , Comentarios='$descripcion' WHERE id = '".$id."'";

            $resultado = mysqli_query($mysql, $update)
            or die ("Error al actualizar los registros");

            mysqli_close($mysql); 
            echo "Los datos fueron actualizados correctamente";

    ?>
		<a class="btn-normal b_azul" href="docente.php">Volver</a>    
    </div>
    </div>
    <?php
}
?>
