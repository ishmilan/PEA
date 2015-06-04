<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
</head>
<body>
<?php
/*Conecta con la base de datos*/
include "conexion.php";

/*Actualiza el valor del código del documento de salida*/
foreach ($_POST['item0'] as $indice=>$valor){
	list($cd , $ref) = explode("::", $indice);
	testmysqli($con,mysqli_query($con,"UPDATE salida SET cod_doc='$valor' WHERE (cod_doc='$cd' and ref='$ref'); "));
}
/*Actualiza el valor de la fecha de salida*/
foreach ($_POST['item1'] as $indice=>$valor){
	list($cd , $ref) = explode("::", $indice);
	testmysqli($con,mysqli_query($con,"UPDATE salida SET fecha='$valor' WHERE (cod_doc='$cd' and ref='$ref'); "));
}
/*Actualiza el valor del referencia de servicio de salida*/
foreach ($_POST['item2'] as $indice=>$valor){
	list($cd , $ref) = explode("::", $indice);
	testmysqli($con,mysqli_query($con,"UPDATE salida SET ref='$valor' WHERE (cod_doc='$cd' and ref='$ref'); "));
}
/*Actualiza el valor del precio de venta del servicio de salida*/
foreach ($_POST['item3'] as $indice=>$valor){
	list($cd , $ref) = explode("::", $indice);
	testmysqli($con,mysqli_query($con,"UPDATE salida SET precio_v='$valor' WHERE (cod_doc='$cd' and ref='$ref'); "));
}

/*Actualiza el valor del nombre del centro de explotación agraria de la salida*/
foreach ($_POST['item4'] as $indice=>$valor){
	list($cd , $ref) = explode("::", $indice);
	testmysqli($con,mysqli_query($con,"UPDATE salida SET nombre_ce='$valor' WHERE (cod_doc='$cd' and ref='$ref'); "));
}
/*Actualiza el valor de las unidades vendidas de la salida*/
foreach ($_POST['item5'] as $indice=>$valor){
	list($cd , $ref) = explode("::", $indice);
	testmysqli($con,mysqli_query($con,"UPDATE salida SET uds_vend='$valor' WHERE (cod_doc='$cd' and ref='$ref'); "));
}
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
<!--Carga la página del menú de nuevo-->
<script type="text/javascript">
	window.self.location="salida.php";
</script>
</body>
</html>