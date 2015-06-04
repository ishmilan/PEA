<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert</title>
</head>
<body>
<?php 
/*Conecta con la base de datos*/
include "conexion.php";
/*Añade un nuevo registro de entrada*/
$v0=$_POST['v0'];
$v1=$_POST['v1'];
$v2=$_POST['v2'];
$v3=$_POST['v3'];
$v4=$_POST['v4'];
$v5=$_POST['v5'];
$v6=$_POST['v6'];
	testmysqli($con,mysqli_query($con,"INSERT entrada ( cod_fact, lote, ref, caducidad, precio, nombre_cc, uds_comp) VALUES ('$v0', '$v1', '$v2', '$v3', '$v4', '$v5', '$v6');"));
	testmysqli($con,mysqli_query($con,"INSERT lotes ( lote, concepto, caducidad, precio, uds) VALUES ( '$v1', '$v2', '$v3', '$v4', '$v6');"));
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
<!--Carga la página del menú de nuevo-->
<script type="text/javascript">
	window.self.location="entrada.php";
</script>
</body>