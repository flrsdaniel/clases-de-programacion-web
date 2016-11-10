<?php
	/**
	* 
	*/
	class Humano 
	{
		private $nombres;
		private $apellidos;
		
		public function __construct($nombres, $apellidos)
		{
			$this->nombres = $nombres;
			$this->apellidos = $apellidos;
		}
		public function getNombres(){			
			return $this->nombres;
		}
		public function getApellidos(){			
			return $this->apellidos;
		}
		
	}
	/**
	* 
	*/
	class ClassAlumnos extends Humano
	{
		private $codigo;
		private $pnf;

	    public	function __construct($codigo, $pnf, $nombres, $apellidos)
		{
			$this->codigo = $codigo;
			$this->pnf = $pnf;
			parent::__construct($nombres,$apellidos);
		}
		public function getAlum(){
			//$nom = $this->getNombres;
			$cade = $this->codigo."<br> PNF : ".$this->pnf."<br> Nombres : ".$this->getNombres()." <br> Apellidos : ".$this->getApellidos();
			return $cade;
		}
	}
	
	$profe = new Humano("Daniel", "Flores");
	$alumno = new Humano("Jhinel", "Arcaya");
	$alumnos = new ClassAlumnos("001","Informática","Jose", "Lenon");
	$profesores = new ClassAlumnos("001","Informática","Jose", "Lenon");
	echo "Mi Objeto Alumno es: <br>Codigo: ".$alumnos->getAlum();
	//echo $profe->getNombres();
	//echo $profe->getApellido();
	//echo $alumno->getNombres();
	//echo $alumno->getApellido();



	
?>