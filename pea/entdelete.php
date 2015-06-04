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
/*Borra registros de entrada*/
	if (isset($_POST['borra'])) {
		foreach ($_POST['borra'] as $indice=>$valor){
			list($cf , $lot) = explode("::", $indice);
			testmysqli($con,mysqli_query($con,"DELETE FROM entrada WHERE (cod_fact='$cf' and lote='$lot')"));
		}
	}
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
<script language="JavaScript">
	window.self.location="entrada.php";
</script>
</body>
</html>
