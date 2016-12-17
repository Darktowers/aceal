<?php

	$usuario="root";
	$host="localhost";
	$pass="";
	$db="aceal";
	//$host="br-cdbr-azure-south-b.cloudapp.net";
	//$usuario="bf24d6a146c400";
	//$pass="4fe43f28";
	//$db="acceal";
  $mysql=new mysqli($host,$usuario,$pass,$db) or die("No se puede conectar");
	
?>