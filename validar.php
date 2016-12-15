<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Validando...</title>
</head>
<body>
	<?php
		include 'conect.php';
		if (isset($_POST['login'])) 
			{
			$usuario = $_POST['user'];
			$pass = $_POST['password'];
			$log = mysqli_query($mysql,"SELECT * FROM docentes WHERE cedula='$usuario' AND password='$pass'");
			if (mysqli_num_rows($log)>0){
				$row = mysqli_fetch_array($log);
				$_SESSION["user"] = $row['cedula'];
				echo "Iniciando sesion para " .$_SESSION['user'].' <p>';
				echo '<script> window.location="docente.php"; </script>'; 	
			}
			else
			{
				echo '<script> alert("Usuario y contraseña incorrectos.");</script>';
				echo '<script> window.location="principal.php"; </script>';
			}
		}
	?>
</body>
</html>