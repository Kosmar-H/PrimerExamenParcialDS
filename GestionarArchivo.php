<?php
	include ("DocenteTutorias.php");
	include ("AlumnosMatriculados.php");
	function Estado($pCodigo)
		{
			$Datos=DocenteTutorias::consultaRegistro();
			$EstadoAlumno=(boolean)false;
			for($k = 0; $k<count($Datos); $k++): 
		 		if($pCodigo==$Datos[$k][0]): 
					$EstadoAlumno=true;
	 				break;
	 			endif; 
			endfor; 
			
			return $EstadoAlumno;
			
		}
	$DatoAlumno=AlumnosMatriculados::consultaRegistro();
	
//Imprimir los elementos del arreglo información
 
	for($i = 0; $i< count($DatoAlumno); $i++): 
		if(Estado($DatoAlumno[$i][0])==true):
			print "<pre>";
			print_r ($DatoAlumno[$i][0]);
			print "</pre>"; 
			
	 	endif;	
 		//print_r ($DatoAlumno[$i]); 
	endfor; 	

?>