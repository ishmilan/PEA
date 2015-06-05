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
<!--MENÚ DE OPCIONES-->
<table class="tabmenu">
	<tr align="center"><th><a href="https://github.com/ishmilan"  target="_blank"><br>Developed by:<br><img src="img/icon.png"></a></th><th><br><br><h1 style="font-size: 3.5rem;color: #F97C17;">PHP-ESM-Admin</h1><h3>Administrador de la Empresa Sergio Milán en PHP</h3></th></tr>
	<tr><th colspan="2"><hr><br></th></tr>
	<tr><td colspan="2">
		<a href="entrada.php"><font face="ubuntu" color="#000" size="4">Ir a entradas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-arrow-right"></span></font></a>
	</td></tr>
	<tr><td colspan="2">
		<a href="salida.php"><font face="ubuntu" color="#000" size="4">Ir a salidas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-arrow-right"></span></font></a>
	</td></tr>
	<tr><td colspan="2">
		<a href="medicamentos.php"><font face="ubuntu" color="#000" size="4">Ir a medicamentos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-arrow-right"></span></font></a>
	</td></tr>
	<tr><td colspan="2">
		<a href="comprobar.php"><font face="ubuntu" color="#000" size="4">Comprobar caducidad de medicamentos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-arrow-right"></span></font></a>
	</td></tr>
	<tr><td colspan="2">
		<a href="ccompra.php"><font face="ubuntu" color="#000" size="4">Ver datos de los centros de compra &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-arrow-right"></span></font></a>
	</td></tr>
	<tr><td colspan="2">
		<a href="cexplotacion.php"><font face="ubuntu" color="#000" size="4">Ver datos de los centros de explotación &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-arrow-right"></span></font></a>
	</td></tr>
	<tr><td colspan="2">
		<a href="tpendiente.php"><font face="ubuntu" color="#000" size="4">Ver tareas pendientes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-arrow-right"></span></font></a>
	</td></tr>
	<tr><td colspan="2">
		<a href="tterminada.php"><font face="ubuntu" color="#000" size="4">Ver tareas terminadas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-arrow-right"></span></font></a>
	</td></tr>
</table>
<!-- FIN MENÚ-->
<footer>
	<a href="ayuda.html" style="color: white;">Ayuda<a>
</footer>
</body>
</html>
