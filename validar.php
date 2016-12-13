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
			$log = mysql_query("SELECT * FROM docentes WHERE user='$usuario' AND password='$pass'");
			if (mysql_num_rows($log)>0){
				$row = mysql_fetch_array($log);
				$_SESSION["user"] = $row['user'];
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