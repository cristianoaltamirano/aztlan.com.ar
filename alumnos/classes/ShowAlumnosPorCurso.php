<?php

class ShowAlumnosPorCurso {

private $idCurso;
private $conexion;

	public function __construct($idCur, $dbh){
		$this->idCurso = $idCur;
		$this->conexion = $dbh;
	}
	
	public function imprimirNombreCurso(){
		$resultSet = $this->conexion->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND cursos.id='" . $this->idCurso . "'");
		$curso = $resultSet->fetchObject();
		echo "<h3>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</h3>";
	}
	
	public function imprimirAlumnos(){
		$statement = $this->conexion->prepare("SELECT alumnos.activo,altas.idCurso FROM alumnos,altas WHERE alumnos.id=altas.idAlumno AND altas.IdCurso = "  .$curso->id . " AND alumnos.activo = 1");
		$statement->execute();
		$count = $statement->rowCount();											
			if($count==0){
				echo "<div id='noAlumnos'>
				<h2>No hay alumnos anotados en este curso.</h2>
				</div>";
			}else{
				echo "<div id='barraNav2'>
					<a href='curso.php?idCurso=" . $this->idCurso . "'>Curso</a>
					| <a href='mesPresentismo.php?idCurso=" . $this->idCurso . "'>Presentismo</a>
					| <a href='informarPagos2.php?idCurso=" . $this->idCurso . "'>Pagos</a>
					| <a href='pasarAlumnos.php?idCurso=" . $this->idCurso . "'>Pasar Alumnos</a>
					| <a href='planillaPeriodo.php?idCurso=" . $this->idCurso . "'>Planilla Grande</a>
					| <a href='planillaCuaderno.php?idCurso=" . $this->idCurso . "'>Planilla Cuaderno</a>
					| <a href='cerrarCurso.php?idCurso=" . $this->idCurso . "'>Cerrar</a>
				</div>";
				echo "<h4>Alumnos Activos</h4>";
				echo "<table class='alumnos'>
				<tr>	
					<th class='num'>Nº</th>
					<th class='nom'>Nombre y Apellido</th>
					<th class='tel'>Teléfono</th>
					<th class='cel'>Celular</th>
					<th class='mail'>Mail</th>
					<th class='ocu'>Ocupación</th>
					<th class='fec'>Fecha Nac.</th>
					<th class='car'>Carta</th>
					<th class='el'>X</th>
				</tr>";	
				$resultSet = $this->conexion->query("SELECT alumnos.id,alumnos.nombre,alumnos.apellido,alumnos.dni,alumnos.telefono,alumnos.celular, alumnos.ocupacion, alumnos.mail,alumnos.fechaNac,alumnos.carta,altas.idAlumno FROM alumnos,altas WHERE altas.idAlumno=alumnos.id AND altas.idCurso = " . $this->idCurso . " ORDER BY alumnos.apellido");
				$r=0;
				while($alumno = $resultSet->fetchObject()){
					$fecha = $alumno->fechaNac;
					$fecha = $this->reOrdenarFecha($fecha);
					$r=$r+1;
					echo "<tr class='row'>
					<td class='num'>".$r."</td>
					<td class='nom'><a href='editarAlumno.php?idAlumno=" . $alumno->id . "'>" . $alumno->apellido . " " . $alumno->nombre . "</a></td>
					<td class='medio'>" . $alumno->dni . "</td>
					<td class='tel'>" . $alumno->telefono . "</td>
					<td class='cel'>" . $alumno->celular . "</td>
					<td class='mail'><a href='mailto:" . $alumno->mail . "'>" . $alumno->mail . "</a></td>
					<td class='ocu'>" . $alumno->ocupacion . "</td>
					<td class='fec'>$fecha</td>
					<td class='car'><a href='" . $alumno->carta . "'> Ver </a></td>
					<td class='el'> <a title='Dar de baja' href='bajaAlumnoCurso.php?idAlumno=" . $alumno->id . "&&idCurso=" . $this->idCurso . "'>(x)</a> </td>
					</tr>";	
				}
				echo "</table>";
			}
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