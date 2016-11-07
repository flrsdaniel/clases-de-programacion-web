<!DOCTYPE html>
<html>
<head>
	<title>Sistema</title>
	<link rel="stylesheet" type="text/css" href="css/lib.css">
	<script type="text/javascript" src="js/lib.js"></script>
</head>
<body>
 <div class="principal">
 	<header>
 		<h1>Sistema</h1>
 		<?php include("menu.html");?>
 	</header>
 	<div class="content">
		<div class="formulario">
			<?php 
			if (isset($_GET['m'])) {
				$m =$_GET["m"];
			}else{
				$m = 5;
			}
			switch ($m) {
				case 0:
					include("formulario.html");
					break;
				case 1:
					include("php/listar.php");
					break;
				case 2:
					include('php/update.php');
					break;
				case 3:
					include("php/borrar.php");
					break;
				case 4:
					include("php/formulario.phtml");
					break;
				case 99:
					include("php/guardar.php");
					break;
				default:
					echo "Contenido";
					break;
			}
			
			?>
		</div>
		<div class="lista"></div>
 	</div>
 	<footer class="pie">
 		Todo los derechos de Autor
 	</footer>
 </div>

</body>
</html>