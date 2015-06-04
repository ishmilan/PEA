<?php
$host="localhost";
$user="root";
$pass="";
/*Conecta con la base de datos*/
$con=mysqli_connect($host,$user,$pass);
if (mysqli_connect_errno()){
	echo "Fallo al conectar MySQL: " . mysqli_connect_error();
}
	mysqli_select_db($con,"esmdb");
/*La función TESTMYSQLI comprueba si la consulta ha tenido éxito o no*/
function testmysqli($con,$mysqli){
	if ($mysqli)
	{
		echo " ";
	} else {
		echo "Error MySQL: ".mysqli_error($con);
	}
};
?>