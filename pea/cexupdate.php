<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
</head>
<body>
<?php
/*Conecta con la base de datos*/
include "conexion.php";
/*Actualiza el valor del cea de los centros de explotacion*/
foreach ($_POST['item0'] as $indice=>$valor){
	testmysqli($con,mysqli_query($con,"UPDATE c_explo SET cea='$valor' WHERE cea='$indice' "));
}
/*Actualiza el valor del nif de los centros de explotacion*/
foreach ($_POST['item1'] as $indice=>$valor){
	testmysqli($con,mysqli_query($con,"UPDATE c_explo SET nif='$valor' WHERE cea='$indice' "));
}
/*Actualiza el valor del nombre de los centros de explotacion*/
foreach ($_POST['item2'] as $indice=>$valor){
	testmysqli($con,mysqli_query($con,"UPDATE c_explo SET nombre_ce='$valor' WHERE cea='$indice' "));
}
/*Actualiza el valor del direcion de los centros de explotacion*/
foreach ($_POST['item3'] as $indice=>$valor){
	testmysqli($con,mysqli_query($con,"UPDATE c_explo SET direccion='$valor' WHERE cea='$indice' "));
}
/*Actualiza el valor del telefono de los centros de explotacion*/
foreach ($_POST['item4'] as $indice=>$valor){
	testmysqli($con,mysqli_query($con,"UPDATE c_explo SET telefono='$valor' WHERE cea='$indice' "));
}
/*Actualiza el valor del mail de los centros de explotacion*/
foreach ($_POST['item5'] as $indice=>$valor){
	testmysqli($con,mysqli_query($con,"UPDATE c_explo SET mail='$valor' WHERE cea='$indice' "));
}
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
<!--Carga la página del menú de nuevo-->
<script type="text/javascript">
	window.self.location="cexplotacion.php";
</script>
</body>
</html>