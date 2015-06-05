<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/fuente/style.css">
	<link rel="stylesheet" type="text/css" href="css/core.css">
	<link rel=icon href="img/favicon.png" sizes="16x16">
	<script type="text/javascript">
//FUNCIÓN JAVASCRIPT PARA EL SELECTOR DE ACCION DE LA PÁGINA
function cambiar(but1,but2,but3,item1,item2,item3){
		document.getElementById(but1).style.backgroundColor = "#008AAA";
		document.getElementById(but1).style.color = "#D8D8D8";
		document.getElementById(but2,but3).style.backgroundColor = "#D8D8D8";
		document.getElementById(but2,but3).style.color = "#00CAF2";
		document.getElementById(but3).style.backgroundColor = "#D8D8D8";
		document.getElementById(but3).style.color = "#00CAF2";
		document.getElementById(item1).style.display = "table";
		document.getElementById(item2).style.display = "none";
		document.getElementById(item3).style.display = "none";
	};
	</script>
	<title>PHP-ESM-Admin</title>
</head>
<body>
<table><tr align="center"><th><h1>Consulta de los registros de entrada<br> <a href="index.php">
<button class="botatras"><span class="icon-arrow-left"></span></button></a></h1></th></tr></table>
<table><tr><th colspan="6">
<!--SELECTOR DE ACCION DE LA PÁGINA Y LLAMADA A LA FUNCIÓN-->
<button id="insbot" onclick="javascript:cambiar('insbot','delbot','updbot','insert','delete','update');"><span class="icon-plus"></span>&nbsp;Insertar</button><button id="delbot" onclick="javascript:cambiar('delbot','insbot','updbot','delete','update','insert');"><span class="icon-cross2"></span>&nbsp;Borrar</button><button id="updbot" onclick="javascript:cambiar('updbot','insbot','delbot','update','insert','delete');"><span class="icon-arrow-up"></span>&nbsp;Modificar</button>
</th></tr></table>
<?php
/*Conecta con la base de datos*/
include "conexion.php";
#CODIGO PARA LA CONSULTA Y EL FORMULARIO INSERT
$result = mysqli_query($con,"SELECT * FROM entrada");
?>	<table align='center' id="insert"><tr align='center'><th>Nº</th><th>Factura</th><th>lote</th><th>ref</th><th>caducidad</th><th>precio</th><th>CCompra</th><th>UDS compradas</th><th>TOTAL</th></tr>
<?php
#IMPRIME LA TABLA CON LOS RESULTADOS DE LA CONSULTA
$j=0;
while($salida = mysqli_fetch_array($result)){
	echo "<tr><th>".++$j."</th>";
		for ($i=0;$i<7;$i++){
			echo "<td>",$salida[$i],"</td>";
		}
	$sum=$salida[4]*$salida[6];	
	echo "<td>$sum</td></tr>";
}
?>
<!--FORMULARIO INSERT-->
	<tr><form name="insert" method="POST" action="entinsert.php"><th></th>
		<td><input type="text" name="v0" value="" size="8"></td>
		<td><input type="text" name="v1" value="" size="8"></td>
		<td><input type="text" name="v2" value="" size="10"></td>
		<td><input type="date" name="v3" value="" size="10"></td>
		<td><input type="text" name="v4" value="" size="10"></td>
		<td><input type="text" name="v5" value="" size="10"></td>
		<td><input type="number" name="v6" value=""></td><td></td></tr>
	<tr><th colspan="9"><button type="submit" id="ins"><span class="icon-plus"></span></button><button type="reset"><span class="icon-cycle"></span></button></td></form></th></tr>
</table>
<!--FIN DE LA CONSULTA Y EL FORMULARIO INSERT-->
<?php
#CODIGO PARA LA CONSULTA Y EL FORMULARIO DELETE
$result = mysqli_query($con,"SELECT * FROM entrada");
?>
<table align='center' id="delete"><tr align='center'><th>Nº</th><th>Factura</th><th>lote</th><th>ref</th><th>caducidad</th><th>precio</th><th>CCompra</th><th>UDS compradas</th></tr>
<?php
#FORMULARIO DELETE
echo '<form name="altas" method="POST" action="entdelete.php">';
#IMPRIME LA TABLA CON LOS RESULTADOS DE LA CONSULTA JUNTO A UN CHECKBOX PARA EL BORRADO
while($salida = mysqli_fetch_array($result)){
echo "<tr><td><input type='checkbox' name='borra[$salida[0]::$salida[1]]'></td>";
	for ($i=0;$i<7;$i++){
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
$result = mysqli_query($con, "SELECT * FROM entrada");
?>
<table align='center' id="update"><tr align='center'><th>Nº</th><th>Factura</th><th>lote</th><th>ref</th><th>caducidad</th><th>precio</th><th>CCompra</th><th>UDS compradas</th></tr>
<?PHP
echo "<form name='modificar' method='POST' action='entupdate.php'>";
#IMPRIME LA TABLA CON LOS RESULTADOS DE LA CONSULTA EN EL FORMULARIO
$j=0;
while($salida = mysqli_fetch_array($result)){
	echo "<tr><th>".++$j."</th>";
	echo "<td><input type='text' name='item0[$salida[0]::$salida[1]]' value='$salida[0]' size='8'></td>\n";
	echo "<td><input type='text' name='item1[$salida[0]::$salida[1]]' value='$salida[1]' size='8'></td>\n";
	echo "<td><input type='text' name='item2[$salida[0]::$salida[1]]' value='$salida[2]' size='8'></td>\n";
	echo "<td><input type='date' name='item3[$salida[0]::$salida[1]]' value='$salida[3]' size='8'></td>\n";
	echo "<td><input type='text' name='item4[$salida[0]::$salida[1]]' value='$salida[4]' size='8'></td>\n";
	echo "<td><input type='text' name='item5[$salida[0]::$salida[1]]' value='$salida[5]' size='14'></td>\n";
	echo "<td><input type='number' name='item6[$salida[0]::$salida[1]]' value='$salida[6]' size='8'></td>\n</tr>";
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
