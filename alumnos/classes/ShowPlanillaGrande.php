<?php

class ShowPlanillaGrande {

private $idPeriodo;
private $idCurso;
private $idAlumno;
private $conexion;

	public function __construct($idPer, $idCur, $dbh){
		$this->idPeriodo = $idPer;
		$this->idCurso = $idCur;
		$this->conexion = $dbh;
	}
	
	public function imprimirNombreCurso(){
		$resultSet = $this->conexion->query("SELECT cursos.valor,cursos.id, cursos.dpm, cursos.idMesDp, cursos.valorPm, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND cursos.id='" . $this->idCurso . "'");
		$curso = $resultSet->fetchObject();
		echo "<h3 class='tituloPlanilla'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</h3>";		
	}

	public function tomarFechas(){
		//Genero un Array para guardar las fechas e inicializo una variable para luego recorrerlo
		$fechas = array();
		$keyFechas = 0;
		//Tomo de la base el Inicio del Curso 
		$resultSet = $this->conexion->query("SELECT * FROM cursos WHERE id='" . $this->idCurso . "'");
		$row = $resultSet->fetchObject();
		$fecha = $row->fechaInicio;
		//Paso la fecha a UNIX TIME
		$fecha = strtotime($fecha);
		//Tomo el "Desde" y "Hasta" del Período vigente. $idP me la da "periodo2.php"
		$resultSet = $this->conexion->query("SELECT * FROM meses WHERE id='" . $this->idPeriodo . "'");
		$mes = $resultSet->fetchObject();
		$desde = $mes->desde;
		$hasta = $mes->hasta;
		//Paso ambos a UNIX TIME
		$desde = strtotime($desde);
		$hasta = strtotime($hasta);
		//Inicializo i para contar las fechas que corresponden al perìodo vigente
		$i = 0;
			//Genero clases cada siete días a partir del inicio del Curso
			//Si cae dentro del período consultado la guardo
			if($fecha>$desde&&$fecha<$hasta){
				while($fecha<=$hasta){
					$fechas[$keyFechas] = date('d/m/Y', $fecha);
					/*Aumento la clave de fechas en 1*/
					$keyFechas = $keyFechas+1;
					$fecha = strtotime('+7day',$fecha);	
					$i = $i + 1;
				}
			}
			//Sino calculo qué días corresponden al período Vigente
			if($fecha<$desde&&$fecha<$hasta){
				while($fecha<$desde){
					$fecha = strtotime('+7day',$fecha);				
				}
				//Y luego la guardo
				while($fecha<=$hasta){
					$fechas["$keyFechas"] = date('d/m/Y', $fecha);		
					/*Aumento la clave de fechas en 1*/
					$keyFechas = $keyFechas+1;
					$fecha = strtotime('+7day',$fecha);	
					$i = $i + 1;
				}
			}
				//Y finalmente hago que no me guarde los días correspondientes a períodos anteriores, sino que guarde un ""
			if($fecha>$desde&&$fecha>$hasta&&$i==0){
				while($i<5){
					$fechas["$keyFechas"] = "";		
					/*Aumento la clave de fechas en 1*/
					$keyFechas = $keyFechas+1;
					$fecha = strtotime('+7day',$fecha);	
					$i = $i + 1;			
				}		
			}	
		return $fechas;
	}
	
	public function tomarAlumnos(){
		//Genero un Array para guardar los alumnos y su id
		$alumnos = array();
		$resultSet = $this->conexion->query("SELECT alumnos.id,alumnos.nombre,alumnos.apellido, alumnos.observaciones FROM alumnos,altas WHERE altas.idAlumno=alumnos.id AND altas.idCurso=" . $this->idCurso . " ORDER BY alumnos.apellido");
		while($alumno = $resultSet->fetchObject()){
			$alumnos[] = $alumno->id;
		}
		return $alumnos;
	}
		
	public function tomarPresentesPorAlumno($idAl, $fec){
		$presentes = array();
		$this->idAlumno = $idAl;
		$fechas = $fec;
		$cantFechas = count($fechas);
		for ($i=0;$i<$cantFechas;$i++){
			$fecha = $fechas[$i];
			$resultSet = $this->conexion->query("SELECT presente, idPresente FROM presentes, presentismo WHERE presentismo.idPresente=presentes.id AND idCurso='" . $this->idCurso . "' AND idAlumno='" . $this->idAlumno . "' AND fecha='$fecha'");
			$presente = $resultSet->fetchObject();
			$presentes[$i] = $presente->abr;
		}
		return $presentes;
	}
	
	
	public function devolverPresentes(){
		$presentes = array();
		$alumnos = $this->tomarAlumnos();
		$fechas = $this->tomarFechas();
		$cantAlumnos = count($alumnos);
		for($i=0;$i<$cantAlumnos;$i++){
			$presentes[$alumnos[$i]] = $this->tomarPresentesPorAlumno($alumnos[$i], $fechas);
		}
		return $presentes;
	}
	
	public function imprimirTabla(){
		echo "<table class='planillaAlumnos'>
		<tr>	
			<th rowspan='2' class='medio'> Nº </th>
			<th rowspan='2'>Nombre y Apellido</th>";
			$this->imprimirFechasCurso();
		echo "<th colspan='2' class='mediop'>Mes</th>
			<th colspan='2' class='mediop'>Matricula</th>
		</tr>
		<tr>
			<th class='medio'>Pago</th>
			<th class='medio'>Debe</th>
			<th class='medio'>Pago</th>
			<th class='medio'>Debe</th>
		</tr>";
		$this->imprimirAlumnos();
		$this->imprimirPresentes();
	}

	public function reOrdenarFecha($rf){
		$d=substr($rf,8,2);
		$m=substr($rf,5,2);
		$a=substr($rf,0,4);
		$refecha = $d."-".$m."-".$a;
		return $refecha;		
	}
	
	public function desc(){
		$this->dbh = null;
	}			
	
}

?>