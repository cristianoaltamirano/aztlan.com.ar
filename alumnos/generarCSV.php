<?php

header('Content-Type: text/html; charset=utf-8');
header('Content-Type: text/csv; charset=utf-8');
//error_reporting(0);
//error_reporting(E_ALL); 
//ini_set("display_errors", 1); 
//ini_set("display_startup_errors", 1); 

if($_GET['idCurso']){
	$idCurso = $_GET['idCurso'];
	include("connect.php");

//obtener resultados para una consulta cualquiera
$result = $dbh->query("SELECT alumnos.id, alumnos.nombre, alumnos.apellido, alumnos.dni, alumnos.mail, alumnos.celular, alumnos.telefono, alumnos.fechaInsc, alumnos.fechaNac, alumnos.horaNac, alumnos.ciudadNac, alumnos.paisNac FROM alumnos,altas WHERE altas.idAlumno=alumnos.id AND altas.idCurso = ".$idCurso." AND altas.final='0' ORDER BY alumnos.apellido");
$row = array();
 
	// abrir un archivo, en este caso un archivo temporal de hasta 12MB
	// (si es más grande, lo escribe a un archivo)
	$fp = fopen( 'php://temp/maxmemory:'. (12*1024*1024) , 'r+' );
	while($row = $result->fetch(PDO::FETCH_ASSOC)){
		//fputcsv( $fp, $row );
		$id = $row['id'];
		$nombre = $row['nombre'];
		$apellido= $row['apellido'];
		$dni= $row['dni'];
		if($dni == 'img/dni/sinDni.jpg'){
			$dni='';
		}
		$email= $row['mail'];
		$celular= $row['celular'];
		$telefono= $row['telefono'];
		$fechaIsc= $row['fechaInsc'];
		$fecha= $row['fechaNac'];
		$hora= $row['horaNac'];
		$ciudad= $row['ciudadNac'];
		$pais= $row['paisNac'];
		fputcsv( $fp, array($idCurso,$id,$nombre,$apellido,$dni,$email,$celular,$telefono,$fechaIsc,$fecha,$hora,$ciudad,$pais,$nombre.' '.$apellido));

	};
 
	// be kind, rewind (devolver la posición del puntero del archivo)
	rewind( $fp );
 
	// obtener contenido del archivo como un string
	$output = stream_get_contents( $fp );
       $output = str_replace(",",";",$output);
 
	// cerrar archivo
	fclose( $fp );
 
 
	// cabeceras HTTP:
	// tipo de archivo y codificación
	header('Content-Type: text/csv; charset=utf-8');
 	
	// forzar descarga del archivo con un nombre de archivo determinado
	header('Content-Disposition: attachment; filename=alumnos-'. time() .'.csv' );
 
	// indicar tamaño del archivo
	header('Content-Length: '. strlen($output) );
 
	// enviar archivo
	echo $output;
 
	exit;
}
?>