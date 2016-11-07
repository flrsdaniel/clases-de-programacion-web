<?php
//FUNCCION DE CONECCION A LA BASE DE DATOS
function conex(){
	include('config.php');
	$con = mysql_connect($conex['SERVER'],$conex['USER'],$conex["CLAVE"]) or die("Error de Conexión a la BD".mysql_error());
	if ($con) {
		mysql_select_db($conex['DB']) or die("Error al Seleccionar la BD".mysql_error());
	}
	return $con;
}
function select($sql){
 $conexion = conex();
 $result = mysql_query($sql) or die("Error en la Consulta".mysql_error());
 return $result;
}


?>