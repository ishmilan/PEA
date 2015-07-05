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
<table><tr align="center"><th><h1>Comprobar el stock de medicamentos caducados<br>
<a href="index.php"><button class="botatras"><span class="icon-arrow-left"></span></button></a></h1></th></tr></table>
<?php
/*Conecta con la base de datos*/
include "conexion.php";
#CODIGO PARA LA CONSULTA Y EL FORMULARIO DELETE
$result = mysqli_query($con,"SELECT concat('El medicamento con el lote <b style=\"color: red;\"><i>', lote, ' </i></b>( ', concepto ,' ) ha caducado recientemente, su fecha de caducidad es ', caducidad) FROM lotes where (caducidad < curdate() or caducidad = curdate())");
?>
<table align='center'><tr></th><th>Nº</th><th>Descripcion</th></tr>
<?php
$j=0;
#IMPRIME LA TABLA CON LOS RESULTADOS DE LA CONSULTA
while($salida = mysqli_fetch_array($result)){
	echo "<tr><th>".++$j."</th><td>",$salida[0],"</td></tr>";
}
#FIN DE LA CONSULTA
?>
	<tr><th colspan="2"><br></th></tr><tr><td colspan="2" bgcolor="#F97C17">Aviso: Si presiona el botón se borrarán automáticamente, creando una nueva tarea pendiente</td></tr><tr><th colspan="2"><a href="comdelete.php"><button class="botatras"><font face="ubuntu" color="#000" size="3"> Dar de baja los lotes</font> <span class="icon-arrow-right"></span></button></a></th></tr>
</table>
<?php
	mysqli_close($con);
?>
</body>
</html>
