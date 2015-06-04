<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete</title>
</head>
<body>
<?php
/*Conecta con la base de datos*/
include "conexion.php";
/*Borra las tareas terminadas */
if (isset($_POST['borra'])) {
	foreach ($_POST['borra'] as $indice=>$valor){
		testmysqli($con,mysqli_query($con,"DELETE FROM t_terminada WHERE (cod_ta='$indice')"));
	}
}
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
<!--Carga la página del menú de nuevo-->
<script type="text/javascript">
	window.self.location="tterminada.php";
</script>
</body>
</html>
