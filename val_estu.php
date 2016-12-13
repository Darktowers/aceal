<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Validando Estudiante</title>
</head>
<body>
	<?php
		include 'conect.php';
		if (isset($_POST['login_estu']))
			{
			$usuario = $_POST['id'];
			$log = mysqli_query($mysql,"SELECT * FROM estudiantes WHERE cedula='$usuario'");
			if (mysqli_num_rows($log)>0){
				$row = mysqli_fetch_array($log);
				$_SESSION["id"] = $row['cedula'];
				echo "Iniciando sesion para " .$_SESSION['id'].' <p>';
				echo '<script> window.location="estudiante.php"; </script>'; 	
			}
			else
			{
				echo '<script> alert("Usuario no existe.");</script>';
				echo '<script> window.location="index.php"; </script>';
			}
		}
	?>
</body>
</html>