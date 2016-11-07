<?php
include("db.php");
if(isset($_POST['m'])){
	$m =$_POST['m'];
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$cedula = $_POST['cedula'];
	$edad = $_POST['edad'];
	$fecnac = $_POST['fecnac'];
	$sql_u = "UPDATE estudiantes SET nombre='$nombre',apellido='$apellido',cedula='$cedula',edad=$edad,fecnac='$fecnac' WHERE id=$id";
	$result_u = select($sql_u);
	if ($result_u) {
		echo "Registro $id Actualizado";
	}
}
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
		echo "<td><a href='index.php?m=4&id=".$datos['id']."'>Actualizar</a>";
		echo "</tr>";
	}
	echo "</table>";
}
mysql_close();
?>
