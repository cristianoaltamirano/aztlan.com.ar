<?php

class ShowCursos {

private $idModalidad;
private $idSede;
private $idAula;
private $idSituacion;
private $idPeriodo;
private $cicloLectivo;
private $conexion;
private $dameTalleres;

	public function __construct($dbh){
		$this->conexion = $dbh;
	}
	
	public function imprimir($idMod, $idSe, $idAu, $idSit, $idPer, $cicloLec, $dameTalleres = null){
		$this->idModalidad = $idMod;
		$this->idSede = $idSe;
		$this->idAula = $idAu;
		$this->idSituacion = $idSit;
		$this->idPeriodo = $idPer;
		$this->cicloLectivo = $cicloLec;
		$this->dameTalleres = $dameTalleres;
		/* VERIFICO QUE HAYA CURSOS EN ESTA MODALIDAD */
		$statement = $this->conexion->prepare("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id  AND cursos.idModalidad='" . $this->idModalidad . "' AND cursos.idSede=" . $this->idSede . " AND cursos.idAula=aulas.id AND aulas.id=" . $this->idAula . " AND cursos.idSituacion=" . $this->idSituacion . " AND cicloLectivo='" . $this->cicloLectivo . "'");
		$statement->execute();
		$count = $statement->rowCount();
		/* TOMO FECHA DESDE Y HASTA DEL PERIODO VIGENTE */
		$resultSet = $this->conexion->query("SELECT * FROM meses WHERE id=". $this->idPeriodo);
		$mes = $resultSet->fetchObject();
		$desdePer = $mes->desde;
		$hastaPer = $mes->hasta;

		if($count==0){
			/* SI NO HAY, MUESTRO MENSAJE */
			echo "<tr>
				<td class='noInscripto' colspan='3'> No hay cursos en esta modalidad </td>
			</tr>";
		}else{
			/*IMPRIMO LOS QUE HAY PARA EL MES VIGENTE Y ENTRE PARENTESIS EL TOTAL*/
			$resultSet = $this->conexion->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id  AND cursos.idModalidad='" . $this->idModalidad . "' AND cursos.idSede=" . $this->idSede . " AND cursos.idAula=aulas.id AND aulas.id=" . $this->idAula . " AND cursos.idSituacion=" . $this->idSituacion . " AND cursos.cicloLectivo='" . $this->cicloLectivo . "' ORDER BY cursos.idDia, horarios.horario ASC");
			$contadorReal = 0;
			while($curso = $resultSet->fetchObject()){

				if($this->dameTalleres)
				{
					switch ($curso->materia) {
						case 'I-Ching':
							$contadorReal++;
							$this->createCurso($curso, $hastaPer);
							break;
						/*case 'Yoga':
							$contadorReal++;
							$this->createCurso($curso, $hastaPer);
							break;*/
						case 'Eneatipos':
							$contadorReal++;
							$this->createCurso($curso, $hastaPer);
							break;
						case 'Pronósticos 2017':
							$contadorReal++;
							$this->createCurso($curso, $hastaPer);
							break;
					}
				}else{
					
					if($curso->materia != 'I-Ching' && $curso->materia != 'Eneatipos' /*&& $curso->materia != 'Yoga' */&& $curso->materia != 'Pronósticos 2017'){
						$this->createCurso($curso, $hastaPer);
						$contadorReal++;
					}
					
				}
			}
			if($contadorReal == 0){
				echo "<tr>
					<td class='noInscripto' colspan='3'> No hay cursos en esta modalidad </td>
				</tr>";
			}
		}
	}

	public function createCurso($curso, $hastaPer){
		echo "<tr>
				<td><a href='curso.php?idCurso=".$curso->id."' >".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</a></td>";
		$statement = $this->conexion->prepare("SELECT alumnos.activo,altas.idCurso FROM alumnos,altas WHERE alumnos.id=altas.idAlumno AND altas.IdCurso = ".$curso->id." AND altas.final=0 AND altas.inicio<='$hastaPer' AND alumnos.activo=1");
		$statement->execute();									
		echo "<td class='medio'><a href='planilla.php?periodo=".$this->idPeriodo."&idCurso=".$curso->id."'>";
		$count = $statement->rowCount();
		if($count==0){
			echo $statement->rowCount()."</a> ";
			$statement = $this->conexion->prepare("SELECT alumnos.activo,altas.idCurso FROM alumnos,altas WHERE alumnos.id=altas.idAlumno AND altas.IdCurso = ".$curso->id." AND altas.final=0 AND alumnos.activo=1");
			$statement->execute();									
			echo "/ (".$statement->rowCount().")</td>";
			echo "</tr>";
		}else{
			echo $statement->rowCount()."</a> </td>";
		}
	}
	
	public function desc(){
		$this->dbh = null;
	}			
	
}

?>