<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/fuente/style.css">
	<link rel="stylesheet" type="text/css" href="css/core.css">
	<link rel=icon href="img/favicon.png" sizes="16x16">
	<script type="text/javascript" src="js/main.js"></script>
	<title>PHP-ESM-Admin</title>
</head>
<body>
<table><tr align="center"><th><h1>Consulta de centros compra<br>
<a href="index.php"><button class="botatras"><span class="icon-arrow-left"></span></button></a></h1></th></tr></table>
<table><tr><th colspan="6">
<!--SELECTOR DE ACCION DE LA PÁGINA Y LLAMADA A LA FUNCIÓN-->
<button id="insbot" onclick="javascript:cambiar('insbot','delbot','updbot','insert','delete','update');"><span class="icon-plus"></span>&nbsp;Insertar</button><button id="delbot" onclick="javascript:cambiar('delbot','insbot','updbot','delete','update','insert');"><span class="icon-cross2"></span>&nbsp;Borrar</button><button id="updbot" onclick="javascript:cambiar('updbot','insbot','delbot','update','insert','delete');"><span class="icon-arrow-up"></span>&nbsp;Modificar</button>
</th></tr></table>
<?php
/*Conecta con la base de datos*/
include "conexion.php";
#CODIGO PARA LA CONSULTA Y EL FORMULARIO INSERT
$result = mysqli_query($con,"SELECT * FROM c_compra");
?>
	<table align='center' id="insert"><tr align='center'><th>Nº</th><th>NIF</th><th>NOMBRE</th><th>Direccion</th><th>Teléfono</th><th>Mail</th></tr>
<?php
#IMPRIME LA TABLA CON LOS RESULTADOS DE LA CONSULTA
$j=0;
while($salida = mysqli_fetch_array($result)){
	echo "<tr><th>".++$j."</th>";
	for ($i=0;$i<5;$i++){
		echo "<td>",$salida[$i],"</td>";
	}
	echo "</tr>";
}
?>
<!--FORMULARIO INSERT-->
	<tr><form name="insert" method="POST" action="ccoinsert.php"><th></th>
		<td><input type="text" name="v1" value=""></td>
		<td><input type="text" name="v2" value=""></td>
		<td><input type="text" name="v3" value=""></td>
		<td><input type="text" name="v4" value=""></td>
		<td><input type="email" name="v5" value=""></td></tr>
	<tr><th colspan="6"><button type="submit" id="ins"><span class="icon-plus"></span></button><button type="reset"><span class="icon-cycle"></span></button></td></form></th></tr>
</table>
<!--FIN DE LA CONSULTA Y EL FORMULARIO INSERT-->
<?php
#CODIGO PARA LA CONSULTA Y EL FORMULARIO DELETE
$result = mysqli_query($con,"SELECT * FROM c_compra");
?>
<table align='center' id="delete"><tr align='center'><th>Nº</th><th>NIF</th><th>NOMBRE</th><th>Direccion</th><th>Teléfono</th><th>Mail</th></tr>
<?php
#FORMULARIO DELETE
echo '<form name="altas" method="POST" action="ccodelete.php">';
#IMPRIME LA TABLA CON LOS RESULTADOS DE LA CONSULTA JUNTO A UN CHECKBOX PARA EL BORRADO
while($salida = mysqli_fetch_array($result)){
echo "<tr><td><input type='checkbox' name='borra[$salida[0]]'></td>";
	for ($i=0;$i<5;$i++){
		echo "<td>",$salida[$i],"</td>";
	}
echo "</tr>";
}
?>
<tr>
	<tr><th colspan="6"><button type="submit" id="del"><span class="icon-cross2"></span></button><button type="reset"><span class="icon-cycle"></span></button></td></form></th></tr>
</table>
<!--FIN DE LA CONSULTA Y EL FORMULARIO DELETE-->
<?php
#CODIGO PARA LA CONSULTA Y EL FORMULARIO UPDATE
$result = mysqli_query($con, "SELECT * FROM c_compra");
?>
<table align='center' id="update"><tr align='center'><th>Nº</th><th>NIF</th><th>NOMBRE</th><th>Direccion</th><th>Teléfono</th><th>Mail</th></tr>
<?PHP
echo "<form name='modificar' method='POST' action='ccoupdate.php'>";
#IMPRIME LA TABLA CON LOS RESULTADOS DE LA CONSULTA EN EL FORMULARIO
$j=0;
while($salida = mysqli_fetch_array($result)){
	echo "<tr><th>".++$j."</th>";
	echo "<td><input type='text' name='item1[$salida[0]]' value='$salida[0]'></td>\n";
	echo "<td><input type='text' name='item2[$salida[0]]' value='$salida[1]'></td>\n";
	echo "<td><input type='text' name='item3[$salida[0]]' value='$salida[2]'></td>\n";
	echo "<td><input type='text' name='item4[$salida[0]]' value='$salida[3]'></td>\n";
	echo "<td><input type='mail' name='item5[$salida[0]]' value='$salida[4]'></td>\n</tr>";
}
?>
	<tr><th colspan="6"><button type="submit"><span class="icon-arrow-up"></span></button><button type="reset"><span class="icon-cycle"></span></button></td></form></th></tr>
</table>
<!--FIN DE LA CONSULTA Y EL FORMULARIO UPDATE-->
<?php 
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
</body>
</html>
