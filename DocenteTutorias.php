<?php
	class DocenteTutorias
	{
		public $aCodigo;
		public $aNombres;
		public $aNombreTutor;
		//public $aEstado;
		function __construct($pCodigo,$pNombres,$pNombreTutor)
		{
			$this->aCodigo=$pCodigo;
			$this->aNombres=$pNombres;
			$this->aNombreTutor=$pNombreTutor;
			//$this->aEstado=Estado();
		}
		public function obtenerCodigo()
		{
			return $this->aCodigo;	
		}
		public function obtenerNombres()
		{
			return $this->aNombres;
		}
		public function obtenerNombreTutor()
		{
			return $this->aNombreTutor;
		}
		//public static function obtenerEstado()
		//{
		//	return $aEstado;
		//}
	
		public function registrarArchivo()
		{
			$archivocsv=fopen("Libro1.csv","a");
			$registro=$this->aCodigo.",".$this->aNombres.",".$this->aNombreTutor.",".$this->aEstado;
			fputs($archivocsv,$registro.PHP_EOt);
			fclose($archivocsv);
		}
		public static function consultaRegistro()
		{
		$fila=0;
		$archivocsv=fopen("Libro1.csv","r");
		while(($registro=fgetcsv($archivocsv,100000,","))==true)
		{
			$num=count($registro);
			for($columna=0;$columna < $num;$columna++)
			{
				$datos[$fila][$columna]=$registro[$columna];
			}
			$fila++;
		}
		fclose($archivocsv);
		return $datos;
		}
		
	}
?>
