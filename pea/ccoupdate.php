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
/*Actualiza el valor del nif de los centros de compra*/
foreach ($_POST['item1'] as $indice=>$valor){
	testmysqli($con,mysqli_query($con,"UPDATE c_compra SET nif='$valor' WHERE nif='$indice' "));
}

/*Actualiza el valor del nombre de los centros de compra*/
foreach ($_POST['item2'] as $indice=>$valor){
	testmysqli($con,mysqli_query($con,"UPDATE c_compra SET nombre_cc='$valor' WHERE nif='$indice' "));
}
/*Actualiza el valor de la dirección de los centros de compra*/
foreach ($_POST['item3'] as $indice=>$valor){
	testmysqli($con,mysqli_query($con,"UPDATE c_compra SET direccion='$valor' WHERE nif='$indice' "));
}
/*Actualiza el valor del telefono de los centros de compra*/
foreach ($_POST['item4'] as $indice=>$valor){
	testmysqli($con,mysqli_query($con,"UPDATE c_compra SET telefono='$valor' WHERE nif='$indice' "));
}
/*Actualiza el valor del email de los centros de compra*/
foreach ($_POST['item5'] as $indice=>$valor){
	testmysqli($con,mysqli_query($con,"UPDATE c_compra SET mail='$valor' WHERE nif='$indice' "));
}
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
<!--Carga la página del menú de nuevo-->
<script type="text/javascript">
	window.self.location="ccompra.php";
</script>
</body>
</html>
