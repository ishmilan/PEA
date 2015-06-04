<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert</title>
</head>
<body>
<?php 
/*Conecta con la base de datos*/
include "conexion.php";
/*Añade un nuevo medicamento*/
$v1=$_POST['v1'];
$v2=$_POST['v2'];
$v3=$_POST['v3'];
	testmysqli($con,mysqli_query($con,"INSERT medicamentos (ref, nombre, descripcion) VALUES ('$v1', '$v2', '$v3');"));
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
<!--Carga la página del menú de nuevo-->
<script type="text/javascript">
	window.self.location="medicamentos.php";
</script>
</body>