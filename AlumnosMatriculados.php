<?php
	class AlumnosMatriculados
	{
		public $aCodigo;
		public $aNombres;
		function __construct($pCodigo,$pNombres)
		{
			$this->aCodigo=$pCodigo;
			$this->aNombres=$pNombres;		}
		public function obtenerCodigo()
		{
			return $this->aCodigo;	
		}
		public function obtenerNombres()
		{
			return $this->aNombres;
		}	
		public function registrarArchivo()
		{
			$archivocsv=fopen("Libro2.csv","a");
			$registro=$this->aCodigo.",".$this->aNombres;
			fputs($archivocsv,$registro.PHP_EOt);
			fclose($archivocsv);
		}
		public static function consultaRegistro()
		{
		$fila=0;
		$archivocsv=fopen("Libro2.csv","r");
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
