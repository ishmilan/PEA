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
/*Borra registros del centro de compra */
if (isset($_POST['borra'])) {
	foreach ($_POST['borra'] as $indice=>$valor){
		testmysqli($con,mysqli_query($con,"DELETE FROM c_compra WHERE (nif='$indice')"));
	}
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
