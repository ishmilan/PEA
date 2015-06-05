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
<table><tr align="center"><th><h1>Tareas pendientes<br>
<a href="index.php"><button class="botatras"><span class="icon-arrow-left"></span></button></a></h1></th></tr></table>
<table><tr><th colspan="6">
<!--SELECTOR DE ACCION DE LA PÁGINA Y LLAMADA A LA FUNCIÓN-->
<button id="insbot" onclick="javascript:cambiar('insbot','delbot','updbot','insert','delete','update');"><span class="icon-plus"></span>&nbsp;Insertar</button><button id="delbot" onclick="javascript:cambiar('delbot','insbot','updbot','delete','update','insert');"><span class="icon-checkmark"></span>&nbsp;Archivar</button><button id="updbot" onclick="javascript:cambiar('updbot','insbot','delbot','update','insert','delete');"><span class="icon-arrow-up"></span>&nbsp;Modificar</button>
</th></tr></table>
<?php
/*Conecta con la base de datos*/
include "conexion.php";
#CODIGO PARA LA CONSULTA Y EL FORMULARIO INSERT
$result = mysqli_query($con,"SELECT * FROM t_pendiente");
?>
<table align='center' id="insert"><tr align='center'><th>Nº</th><th>Descripcion</th></tr>
<?php
$j=1;
while($salida = mysqli_fetch_array($result)){
echo "<tr><th>",$j++,"</th><td>",$salida[1],"</td></tr>";
}
?>
	<tr><form name="insert" method="POST" action="tpinsert.php"><th></th>
		<td><input type="text" name="v1" value="" size="100%"></td></tr>
	<tr><th colspan="6"><button type="submit" id="ins"><span class="icon-plus"></span></button><button type="reset"><span class="icon-cycle"></span></button></td></form></th></tr>
</table>
<?php
#CODIGO PARA LA CONSULTA Y EL FORMULARIO DELETE(ARCHIVAR)
$result = mysqli_query($con,"SELECT * FROM t_pendiente");
?>
<table align='center' id="delete"><tr align='center'><th></th><th>Descripcion</th></tr>
<?php
echo '<form name="altas" method="POST" action="tpdelete.php">';

while($salida = mysqli_fetch_array($result)){
	echo "<tr><td><input type='checkbox' name='borra[$salida[0]]'></td><td>",$salida[1],"</td></tr>";
}
?>
<tr>
	<tr><th colspan="6"><button type="submit" id="ins"><span class="icon-checkmark"></span></button><button type="reset"><span class="icon-cycle"></span></button></td></form></th></tr>
</table>
<?php 
#CODIGO PARA LA CONSULTA Y EL FORMULARIO UPDATE
$result = mysqli_query($con, "SELECT * FROM t_pendiente");
?>
<table align='center' id="update"><tr align='center'><th>Nº</th><th>Descripcion</th></tr>
<?PHP
echo "<form name='modificar' method='POST' action='tpupdate.php'>";
$j=0;
while($salida = mysqli_fetch_array($result)){
	echo "<tr><th>".++$j."</th><td><input type='text' name='item1[$salida[0]]' value='$salida[1]' size='100%'></td></tr>";
}
?>
	<tr><th colspan="6"><button type="submit"><span class="icon-arrow-up"></span></button><button type="reset"><span class="icon-cycle"></span></button></td></form></th></tr>
</table>
<?php 
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>
</body>
</html>
