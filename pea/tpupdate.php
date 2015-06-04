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
/*Actualiza la tarea*/
foreach ($_POST['item1'] as $indice=>$valor){
	testmysqli($con,mysqli_query($con,"UPDATE t_pendiente SET tarea='$valor' WHERE cod_ta='$indice' "));
}
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
<!--Carga la página del menú de nuevo-->
<script type="text/javascript">
	window.self.location="tpendiente.php";
</script>
</body>
</html>