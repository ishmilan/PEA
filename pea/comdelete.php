<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Delete</title>
</head>
<body>
<?php
/*Conecta con la base de datos*/
include "conexion.php";
/*Borra registros de la tabla lote(tabla auxiliar a "entrada" para que el usuario tenga un seguimiento completo de las entradas sin que los datos sean afectados*/
	testmysqli($con,mysqli_query($con,"DELETE FROM lotes WHERE (caducidad < curdate() or caducidad = curdate())"));
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
<script language="JavaScript">
	window.self.location="comprobar.php";
</script>
</body>
</html>
?>