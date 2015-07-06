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
<table><tr align="center"><th><h1>Consulta de los registros de salida<br>
<a href="index.php"><button class="botatras"><span class="icon-arrow-left"></span></button></a></h1></th></tr></table>
<table><tr><th colspan="6">
<!--SELECTOR DE ACCION DE LA PÁGINA Y LLAMADA A LA FUNCIÓN-->
<button id="insbot" onclick="javascript:cambiar('insbot','delbot','updbot','insert','delete','update');"><span class="icon-plus"></span>&nbsp;Insertar</button><button id="delbot" onclick="javascript:cambiar('delbot','insbot','updbot','delete','update','insert');"><span class="icon-cross2"></span>&nbsp;Borrar</button><button id="updbot" onclick="javascript:cambiar('updbot','insbot','delbot','update','insert','delete');"><span class="icon-arrow-up"></span>&nbsp;Modificar</button>
</th></tr></table>
<?php
/*Conecta con la base de datos*/
include "conexion.php";
#CODIGO PARA LA CONSULTA Y EL FORMULARIO INSERT
$result = mysqli_query($con,"SELECT * FROM salida");
?>
	<table align='center' id="insert"><tr align='center'><th>Nº</th><th>Cod. Documento</th><th>fecha</th><th>ref</th><th>precio</th><th>Nombre CEA</th><th>UDS</th><th>TOTAL</th></tr>
<?php
#IMPRIME LA TABLA CON LOS RESULTADOS DE LA CONSULTA
$j=0;
while($salida = mysqli_fetch_array($result)){
	echo "<tr><th>".++$j."</th>";
		for ($i=0;$i<6;$i++){
			echo "<td>",$salida[$i],"</td>";
		}
	$sum=$salida[3]*$salida[5];	
	echo "<td>$sum</td></tr>";
}
?>
<!--FORMULARIO INSERT-->
	<tr><form name="insert" method="POST" action="salinsert.php"><th></th>
		<td><input type="text" name="v0" value="" size="8"></td>
		<td><input type="date" name="v1" value=""></td>
		<td><input type="text" name="v2" value="" size="8"></td>
		<td><input type="text" name="v3" value=""></td>
		<td><input type="text" name="v4" value=""></td>
		<td><input type="number" name="v5" value=""></td><td></td></tr>
	<tr><th colspan="9"><button type="submit" id="ins"><span class="icon-plus"></span></button><button type="reset"><span class="icon-cycle"></span></button></td></form></th></tr>
</table>
<!--FIN DE LA CONSULTA Y EL FORMULARIO INSERT-->
<?php
#CODIGO PARA LA CONSULTA Y EL FORMULARIO DELETE
$result = mysqli_query($con,"SELECT * FROM salida");
?>
<table align='center' id="delete"><tr align='center'><th>Nº</th><th>Cod. Documento</th><th>fecha</th><th>ref</th><th>precio</th><th>CEA</th><th>UDS</th></tr>
<?php
#FORMULARIO DELETE
echo '<form name="altas" method="POST" action="saldelete.php">';
#IMPRIME LA TABLA CON LOS RESULTADOS DE LA CONSULTA JUNTO A UN CHECKBOX PARA EL BORRADO
while($salida = mysqli_fetch_array($result)){
echo "<tr><td><input type='checkbox' name='borra[$salida[0]::$salida[2]]'></td>";
	for ($i=0;$i<6;$i++){
		echo "<td>",$salida[$i],"</td>";
	}
echo "</tr>";
}
?>
<tr>
	<tr><th colspan="8"><button type="submit" id="del"><span class="icon-cross2"></span></button><button type="reset"><span class="icon-cycle"></span></button></td></form></th></tr>
</table>
<!--FIN DE LA CONSULTA Y EL FORMULARIO DELETE-->
<?php 
#CODIGO PARA LA CONSULTA Y EL FORMULARIO UPDATE
$result = mysqli_query($con,"SELECT * FROM salida");
?>
<table align='center' id="update"><tr align='center'><th>Nº</th><th>Cod. Documento</th><th>fecha</th><th>ref</th><th>precio</th><th>CEA</th><th>UDS</th></tr>
<?PHP
echo "<form name='modificar' method='POST' action='salupdate.php'>";
#IMPRIME LA TABLA CON LOS RESULTADOS DE LA CONSULTA EN EL FORMULARIO
$j=0;
while($salida = mysqli_fetch_array($result)){
	echo "<tr><th>".++$j."</th>";
	echo "<td><input type='text' name='item0[$salida[0]::$salida[2]]' value='$salida[0]' size='12'></td>\n";
	echo "<td><input type='date' name='item1[$salida[0]::$salida[2]]' value='$salida[1]'></td>\n";
	echo "<td><input type='text' name='item2[$salida[0]::$salida[2]]' value='$salida[2]' size='12'></td>\n";
	echo "<td><input type='text' name='item3[$salida[0]::$salida[2]]' value='$salida[3]' size='12'></td>\n";
	echo "<td><input type='text' name='item4[$salida[0]::$salida[2]]' value='$salida[4]' size='12'></td>\n";
	echo "<td><input type='number' name='item5[$salida[0]::$salida[2]]' value='$salida[5]'></td>\n</tr>";
}
?>
	<tr><th colspan="8"><button type="submit"><span class="icon-arrow-up"></span></button><button type="reset"><span class="icon-cycle"></span></button></td></form></th></tr>
</table>
<!--FIN DE LA CONSULTA Y EL FORMULARIO UPDATE-->
<?php 
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
</body>
</html>
