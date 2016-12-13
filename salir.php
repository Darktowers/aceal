<?php
session_start();
session_destroy();
echo '<script> window.location="principal.php"; </script>';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
	<title>Cerrando sesión</title>
</head>
<body>
	<script language="javascript">location.href = "principal.php";</script>
</body>
</html>