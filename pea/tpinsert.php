<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Insert</title>
</head>
<body>
<?php 
/*Conecta con la base de datos*/
include "conexion.php";
/*Añade una nueva tarea pendiente*/
$v1=$_POST['v1'];
	testmysqli($con,mysqli_query($con,"INSERT t_pendiente (tarea) VALUES ('$v1');"));
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
<!--Carga la página del menú de nuevo-->
<script type="text/javascript">
	window.self.location="tpendiente.php";
</script>
</body>