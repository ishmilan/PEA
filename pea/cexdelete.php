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
/*Borra registros del centro de explotacion */
	if (isset($_POST['borra'])) {
		foreach ($_POST['borra'] as $indice=>$valor){
			testmysqli($con,mysqli_query($con,"DELETE FROM c_explo WHERE (cea='$indice')"));
		}
	}
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
<script language="JavaScript">
	window.self.location="cexplotacion.php";
</script>
</body>
</html>
