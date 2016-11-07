<?php
include("db.php");

///inicio de eliminar
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql_d = "DELETE FROM estudiantes WHERE id = $id";
	$result_d = select($sql_d);
	if($result_d){
		echo "El registro correspondiente a $id ha sido eliminado...<br>";
	}
}///fin de eliminar
///lista el resto
$sql="SELECT * FROM estudiantes";
$result = select($sql);
if($result){
	echo "<table class='listar'>";
	echo "<tr class='titulo_tr'><td>Nombre</td><td>Apellido</td><td>Cedula</td><td>Edad</td><td>Fecha de Nacimiento</td><td>Opción</td></tr>";
	while ($datos = mysql_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$datos['nombre']."</td>";
		echo "<td>".$datos['apellido']."</td>";
		echo "<td>".$datos['cedula']."</td>";
		echo "<td>".$datos['edad']."</td>";
		echo "<td>".$datos['fecnac']."</td>";	
		echo "<td><a href='index.php?m=$m&id=".$datos['id']."'>Borrar</a>";
		echo "</tr>";
	}
	echo "</table>";
}
mysql_close();
?>
