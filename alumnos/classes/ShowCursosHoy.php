<?php

class ShowCursosHoy {

private $conexion;

	public function __construct($dbh){
		$this->conexion = $dbh;
	}
	
	public function imprimir($idP,$cicloLec){
		$this->cicloLectivo = $cicloLec;
		$this->idPeriodo = $idP;
		/* VERIFICO QUE DÍA ES HOY */
		$dia = date("D");

			switch($dia) {
			case "Mon": $dia = "Lunes";
			break;
			case "Tue": $dia = "Martes";
			break;
			case "Wed": $dia = "Miércoles";
			break;
			case "Thu": $dia = "Jueves";
			break;
			case "Fri": $dia = "Viernes";
			break;
			case "Sat": $dia = "Sábado";
			break;
			default: $dia = "Domingo";
			}
			
		/* TOMO FECHA DESDE Y HASTA DEL PERIODO VIGENTE */
		$resultSet = $this->conexion->query("SELECT * FROM meses WHERE id=". $this->idPeriodo);
		$mes = $resultSet->fetchObject();
		$desdePer = $mes->desde;
		$hastaPer = $mes->hasta;
			
		/* SELECCIONO LOS CURSOS Y SI SON DEL DIA DE HOY LOS IMPRIMO */
		$statement = $this->conexion->prepare("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idMateria=materias.id AND cursos.idDia=dias.id AND dias.dia='$dia' AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND cursos.idSituacion=1 AND cicloLectivo='" . $this->cicloLectivo . "'");
		$statement->execute();
		$count = $statement->rowCount();

			if($count==0){
				/* SI NO HAY, MUESTRO MENSAJE */
				echo "<tr>
					<td class='noInscripto' colspan='2'> No hay cursos en el dia de hoy</td>
				</tr>";
			}else{
				/* SI HAY IMPRIMO LOS CURSOS Y LA CANTIDAD DE ALUMNOS QUE HAY PARA EL MES VIGENTE*/
				$resultSet = $this->conexion->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idMateria=materias.id AND cursos.idDia=dias.id AND dias.dia='$dia' AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND cursos.idSituacion=1 AND cicloLectivo='" . $this->cicloLectivo . "' ORDER BY cursos.idSede, cursos.idAula");
				$totalAlumnosDia = 0;
				
					while($curso = $resultSet->fetchObject()){
						echo "<tr>
								<td><a href='curso.php?idCurso=".$curso->id."' >".$curso->materia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</a></td>";
						$statement = $this->conexion->prepare("SELECT alumnos.activo,altas.idCurso FROM alumnos,altas WHERE alumnos.id=altas.idAlumno AND altas.IdCurso = ".$curso->id." AND altas.final=0 AND altas.inicio<'$hastaPer' AND alumnos.activo=1");
						$statement->execute();									
						echo "<td class='medio'><a href='planilla.php?periodo=".$this->idPeriodo."&idCurso=".$curso->id."'>".$statement->rowCount()."</a></td>";
						$totalAlumnosDia = $totalAlumnosDia + $statement->rowCount();
						$statement = $this->conexion->prepare("SELECT alumnos.activo,altas.idCurso FROM alumnos,altas WHERE alumnos.id=altas.idAlumno AND altas.IdCurso = ".$curso->id." AND altas.final=0 AND alumnos.activo=1");
						$statement->execute();									
						//echo "/ ".$statement->rowCount()."</td>
						echo "</tr>";
					}
						echo "<tr>
							<th>Total de Alumnos del dia</th>
							<th class='medio'>$totalAlumnosDia</th>
						</tr>";
			}
	}
	
	public function desc(){
		$this->dbh = null;
	}			
	
}

?>