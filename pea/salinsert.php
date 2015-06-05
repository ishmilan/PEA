<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Insert</title>
</head>
<body>
<?php
/*Conecta con la base de datos*/
include "conexion.php";
/*Añade un nuevo registro de salida*/
$v0=$_POST['v0'];
$v1=$_POST['v1'];
$v2=$_POST['v2'];
$v3=$_POST['v3'];
$v4=$_POST['v4'];
$v5=$_POST['v5'];
testmysqli($con,mysqli_query($con,"INSERT salida ( cod_doc, fecha, ref, precio_v, nombre_ce, uds_vend) VALUES ('$v0', '$v1', '$v2', '$v3', '$v4', '$v5');"));
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
<!--Carga la página del menú de nuevo-->
<script type="text/javascript">
	window.self.location="salida.php";
</script>
</body>
