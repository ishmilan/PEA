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
/*Actualiza el valor del referencia del medicamento de la entrada*/
foreach ($_POST['item2'] as $indice=>$valor){
	list($cf , $lot) = explode("::", $indice);
	testmysqli($con,mysqli_query($con,"UPDATE entrada SET ref='$valor' WHERE (cod_fact='$cf' and lote='$lot'); "));
}
/*Actualiza el valor de la fecha de caducidad del medicamento de la entrada*/
foreach ($_POST['item3'] as $indice=>$valor){
	list($cf , $lot) = explode("::", $indice);
	testmysqli($con,mysqli_query($con,"UPDATE entrada SET caducidad='$valor' WHERE (cod_fact='$cf' and lote='$lot'); "));
}
/*Actualiza el valor del precio de la entrada*/
foreach ($_POST['item4'] as $indice=>$valor){
	list($cf , $lot) = explode("::", $indice);
	testmysqli($con,mysqli_query($con,"UPDATE entrada SET precio='$valor' WHERE (cod_fact='$cf' and lote='$lot'); "));
}
/*Actualiza el valor del nombre del centro de compra de la entrada*/
foreach ($_POST['item5'] as $indice=>$valor){
	list($cf , $lot) = explode("::", $indice);
	testmysqli($con,mysqli_query($con,"UPDATE entrada SET nombre_cc='$valor' WHERE (cod_fact='$cf' and lote='$lot'); "));
}
/*Actualiza el valor de las unidades compradas de la entrada*/
foreach ($_POST['item6'] as $indice=>$valor){
	list($cf , $lot) = explode("::", $indice);
	testmysqli($con,mysqli_query($con,"UPDATE entrada SET uds_comp='$valor' WHERE (cod_fact='$cf' and lote='$lot'); "));
}
/*Actualiza el valor del código factura de la entrada*/
foreach ($_POST['item0'] as $indice=>$valor){
	list($cf , $lot) = explode("::", $indice);
	testmysqli($con,mysqli_query($con,"UPDATE entrada SET cod_fact='$valor' WHERE (cod_fact='$cf' and lote='$lot'); "));
}
/*Actualiza el valor del lote del medicamento de la entrada*/
foreach ($_POST['item1'] as $indice=>$valor){
	list($cf , $lot) = explode("::", $indice);
	testmysqli($con,mysqli_query($con,"UPDATE entrada SET lote='$valor' WHERE (cod_fact='$cf' and lote='$lot'); "));
}	
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
<!--Carga la página del menú de nuevo-->
<script type="text/javascript">
	window.self.location="entrada.php";
</script>
</body>
</html>