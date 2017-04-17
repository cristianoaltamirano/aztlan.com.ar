<?php
header('Content-Type: application/json');
ini_set('display_errors', 'On');
ini_set('default_charset', 'utf-8');
error_reporting(E_ALL);
require_once 'Conexion.php';
$dbh = Conexion::getConexion();
//2016-07-14
$fecha = $_POST['fecha'];
$resultSet = $dbh->query("SELECT * FROM pagos WHERE fecha='$fecha'");

$arrPagos = array();
$curso = '';
$materia = '';
$sede = '';
$horario = '';
$acumulado = 0;
while($pagos = $resultSet->fetchObject()){
	$idCurso = $pagos->idCurso;
	$idAlumno = $pagos->idAlumno;
	$idMes = $pagos->idMes;
	$resultCurso = $dbh->query("SELECT cursos.valor, cursos.id, meses.mes, materias.materia, dias.dia, horarios.horario, sedes.sede, alumnos.nombre, alumnos.apellido, aulas.aula FROM cursos,meses,materias,dias,horarios,sedes,alumnos,aulas WHERE cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND cursos.id='$idCurso' AND alumnos.id='$idAlumno' AND meses.id='$idMes' ORDER BY cursos.id");
	while($cursoObject = $resultCurso->fetchObject()){
		$materia = $cursoObject->materia . ' ' . $cursoObject->dia . ' ' . $cursoObject->horario  . ' ' . $cursoObject->aula;
		$sede = $cursoObject->sede;
		$alumno = $cursoObject->apellido . " " . $cursoObject->nombre;
		$mes = $cursoObject->mes;
	}

	$object = (object) ['fecha' => $pagos->fecha,
							 'sede' => $sede,
							'curso' => $materia,
							'alumno' => $alumno,
							'idCurso' => $pagos->idCurso,
							'pagos' => $pagos->valor,
							'mes' => $mes];
	array_push($arrPagos,$object);
	/*if(count($arrPagos) > 0)
	{
		$encontro = 'no';
		for ($i=0; $i < count($arrPagos); $i++) { 
			if($arrPagos[$i]->idCurso == $pagos->idCurso)
			{
				$arrPagos[$i]->pagos = $arrPagos[$i]->pagos + $pagos->valor;
				$encontro = 'si';
			}
		}
		if($encontro == 'no')
		{
			$object = (object) ['fecha' => $pagos->fecha,
								 'sede' => $sede,
								'curso' => $materia,
								'idCurso' => $pagos->idCurso,
								'pagos' => $pagos->valor];
			array_push($arrPagos,$object);
		}
	}else
	{
		$object = (object) ['fecha' => $pagos->fecha,
							 'sede' => $sede,
							'curso' => $materia,
							'idCurso' => $pagos->idCurso,
							'pagos' => $pagos->valor];
		array_push($arrPagos,$object);
	}*/
}
echo json_encode($arrPagos);
?>