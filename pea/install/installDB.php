<?php
/*Conecta con la base de datos*/
include "../conexion.php";
/*Función para crear la base datos*/
function crear_db($con,$datab){
	$sql="CREATE DATABASE $datab";
	if (mysqli_query($con,$sql))
	{
		echo "Base de datos creada";
		mysqli_select_db($con,"$datab");
	} else {
		echo "Error al crear la base de datos: " . mysqli_error($con);
	}
};
/*Función para crear tablas*/
function crear_c($con,$tabla){
	if (mysqli_query($con,$tabla)) {
		echo "tabla creada"."<br>";
	} else {
		echo "Error al crear la tabla: " . mysqli_error($con)."<br>";
	}
};
/*Variable para la tabla medicamentos*/
$medicamentos="
		CREATE TABLE medicamentos (
		ref varchar(12) NOT NULL,
		nombre varchar(20) NOT NULL,
		descripcion varchar(40) NOT NULL,
		PRIMARY KEY (ref),
		UNIQUE auto(ref)
		)";
/*Variable para la tabla centros de compra*/
$compra="
		CREATE TABLE c_compra (
		nif varchar(12) NOT NULL,
		nombre_cc varchar(20) NOT NULL,
		direccion varchar(60) NULL,
		telefono varchar(9) NULL,
		mail varchar(30) NULL,
		PRIMARY KEY (nif)
		)";
/*Variable para la tabla centros de explotación*/
$explotacion="
		CREATE TABLE c_explo (
		cea varchar(12) NOT NULL,
		nif varchar(12) NOT NULL,
		nombre_ce varchar(20) NOT NULL,
		direccion varchar(60) NULL,
		telefono varchar(9) NULL,
		mail varchar(30) NULL,
		PRIMARY KEY (cea)
		)";
/*Variable para la tabla de entradas*/
$entrada="
		CREATE TABLE entrada (
		cod_fact varchar(20) NOT NULL,
		lote varchar(28) NOT NULL,
		ref varchar(12) NOT NULL,
		caducidad date NOT NULL,
		precio double(6,2) NULL,
		nombre_cc varchar(20) NULL,
		uds_comp smallint NULL,
		PRIMARY KEY (cod_fact,ref)
		)";
/*Variable para la tabla de salidas*/
$salida="
		CREATE TABLE salida (
		cod_doc varchar(20) NOT NULL,
		fecha date NOT NULL,		
		ref varchar(12) NOT NULL,
		precio_v double(6,2) NULL,
		nombre_ce varchar(20) NULL,
		uds_vend smallint NULL,
		PRIMARY KEY (cod_doc,ref)
		)";
/*Variable para la tabla de tareas pendientes*/
$tp="
		CREATE TABLE t_pendiente(
		cod_ta MEDIUMINT NOT NULL AUTO_INCREMENT,
		tarea VARCHAR( 80 ) NOT NULL ,
		PRIMARY KEY ( cod_ta ) ,
		UNIQUE auto( cod_ta )
)";
/*Variable para la tabla de tareas terminadas*/
$tt="
		CREATE TABLE t_terminada (
		cod_ta MEDIUMINT NOT NULL,
		tarea varchar(80) NOT NULL,
		PRIMARY KEY (cod_ta)
		)";
/*Variable para la tabla lotes*/
$lote="
		CREATE TABLE lotes (
		lote varchar(12) NOT NULL,
		concepto varchar(20) NOT NULL,
		caducidad date NOT NULL,
		precio double(6,2) NULL,
		uds smallint NULL,
		PRIMARY KEY (lote)
		)";
/*Crear base de datos*/
crear_db($con,"ESMDB");
/*Crear tablas*/
crear_c($con,$compra);
crear_c($con,$explotacion);
crear_c($con,$entrada);
crear_c($con,$salida);
crear_c($con,$tp);
crear_c($con,$tt);
crear_c($con,$lote);
#CERRAR CONEXIÓN CON LA BD
mysqli_close($con);
?>