<?php
include("db.php");
$sql="SELECT * FROM estudiantes";

$result = select($sql);
if($result){
	echo "<table class='listar'>";
	echo "<tr class='titulo_tr'><td>Nombre</td><td>Apellido</td><td>Cedula</td><td>Edad</td><td>Fecha de Nacimiento</td>";
	while ($datos = mysql_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$datos['nombre']."</td>";
		echo "<td>".$datos['apellido']."</td>";
		echo "<td>".$datos['cedula']."</td>";
		echo "<td>".$datos['edad']."</td>";
		echo "<td>".$datos['fecnac']."</td>";	
		echo "</tr>";
	}
	echo "</table>";
}
mysql_close();
?>