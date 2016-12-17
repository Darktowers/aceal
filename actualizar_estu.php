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
	<div class="datos-estu">
        <center>
            <h5>Actualizar Datos</h5>
        </center>
		<?php
		 
		$resultado = mysqli_query($mysql,"SELECT sedes.id,sedes.nombre_sede,estudiantes.nombres,estudiantes.correo,estudiantes.telefono,estudiantes.direccion,grado,cedula,apellidos FROM `estudiantes`,`sedes` WHERE sedes.id = estudiantes.id_sede AND cedula = '".$cedula."'");
		while ($row = mysqli_fetch_array($resultado)) 
		{ ?>
			<form method="GET" action="actualizar_estu.php" class="form">
				<input required name="cedula" type="text" value="<?php echo $row['cedula']?>">
				<input required name="nombres" type="text" value="<?php echo $row['nombres']?>">
				<input required name="apellidos" type="text" value="<?php echo $row['apellidos']?>">
				<input required name="grado" type="text" value="<?php echo $row['grado']?>">
				<input required name="telefono" type="text" value="<?php echo $row['telefono']?>">
				<input required name="correo" type="text" value="<?php echo $row['correo']?>">
				<input required name="direccion" type="text" value="<?php echo $row['direccion']?>">
                
                <select required name="sede" id="">
                    <option selected value="<?php echo $row['id']?>"><?php echo $row['nombre_sede']?></option>
                        <?php 
                            $resultadoxy = mysqli_query($mysql,"SELECT * FROM sedes");
                            while ($row = mysqli_fetch_array($resultadoxy)) 
                            {
                                $nombre = utf8_encode($row["nombre_sede"]);
                                $id = $row["id"];
                                ?>
                    <option value="<?=$id?>"><?=$nombre?></option>
                        <?php
                            }
                        ?>
                </select> 
                <div class="buttons" style="display:flex;">
                    <input type="submit" class="btn-normal b_azul" value="Actualizar">
                    <a href="docente.php" class="btn-normal b_azul">Volver</a>
                </div>
                </form>
		<?php
		}
		?>




    </div>


	

</div>
</div>


<?php
include_once("footer.php");
}else if($_GET){

    session_start();
include 'conect.php';
include_once("header.php");	 
if (isset($_SESSION['user'])) 
{
	echo "";
}
else
{
	echo '<script> window.location="index.php"; </script>';
}

?>
<div class="container-abso">


	<div class="container-card">
<?php
        		$cedula = $_GET['cedula'];
                $nombres = $_GET['nombres'];
                $apellidos = $_GET['apellidos'];
                $telefono = $_GET['telefono'];
                $correo = $_GET['correo'];
                $direccion = $_GET['direccion'];
                $grado = $_GET['grado'];
                $id_sede = $_GET['sede'];
                            $update = "UPDATE estudiantes SET cedula='$cedula', nombres='$nombres', apellidos='$apellidos',telefono='$telefono',correo='$correo',direccion='$direccion',grado='$grado',id_sede='$id_sede' WHERE cedula = '".$cedula."'";

                            $resultado = mysqli_query($mysql, $update)
                            or die ("Error al actualizar los registros");

                            mysqli_close($mysql); 
                            echo "Los datos fueron actualizados correctamente";
                            ?>
                            <a href="docente.php"><button class="btn-normal b_azul">Volver</button>
                            </div>
                            </div>
                            <?php

            
}
?>