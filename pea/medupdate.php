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
/*Actualiza el valor de la referencia de medicamentos*/
foreach ($_POST['item1'] as $indice=>$valor){
	testmysqli($con,mysqli_query($con,"UPDATE medicamentos SET ref='$valor' WHERE ref='$indice' "));
}
/*Actualiza el valor del nombre de medicamentos*/
foreach ($_POST['item2'] as $indice=>$valor){
	testmysqli($con,mysqli_query($con,"UPDATE medicamentos SET nombre='$valor' WHERE ref='$indice' "));
}
/*Actualiza el valor de la descripcion de medicamentos*/
foreach ($_POST['item3'] as $indice=>$valor){
	testmysqli($con,mysqli_query($con,"UPDATE medicamentos SET descripcion='$valor' WHERE ref='$indice' "));
}
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
<!--Carga la página del menú de nuevo-->
<script type="text/javascript">
	window.self.location="medicamentos.php";
</script>
</body>
</html>