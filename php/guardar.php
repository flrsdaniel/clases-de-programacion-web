<?php
	if(isset($_POST['nombre'])){
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$cedula = $_POST['cedula'];
		$edad = $_POST['edad'];
		$fecnac = $_POST['fecnac'];
		include("db.php");
		$sql="INSERT INTO estudiantes (id,nombre,apellido,cedula,edad,fecnac)values(null,'$nombre','$apellido',$cedula,$edad,'$fecnac')";
		//$sql_select="SELECT * FROM estudiantes";
		//$sql2="UPDATE estudiantes SET(nombre='Andres') where id=1";
		
		$result = select($sql);
		if($result){			
			header("location: ../index.php?m=0");
			mysql_close();
		}
	}else{
	header("location: ../");
}

?>