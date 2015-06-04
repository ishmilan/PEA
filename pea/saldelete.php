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
/*Borra registros de salida*/
if (isset($_POST['borra'])) {
	foreach ($_POST['borra'] as $indice=>$valor){
		list($cd , $ref) = explode("::", $indice);
		testmysqli($con,mysqli_query($con,"DELETE FROM salida WHERE (cod_doc='$cd' and ref='$ref')"));
	}
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
