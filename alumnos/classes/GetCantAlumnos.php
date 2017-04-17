<?php

class GetCantAlumnos {

private $idMateria;
private $idModalidad;
private $idSede;
private $cicloLectivo;
private $conexion;

	public function __construct($dbh, $cicloLec){
		$this->conexion = $dbh;
		$this->cicloLectivo = $cicloLec;
	}
	
	public function imprimir($idMod, $idS, $idMat){
		$this->idModalidad = $idMod;
		$this->idSede = $idS;
		$this->idMateria =  $idMat;
		$statement = $this->conexion->prepare("SELECT cursos.idSede, cursos.idMateria, cursos.idModalidad, altas.idAlumno, alumnos.nombre FROM cursos,altas,alumnos WHERE altas.idAlumno=alumnos.id AND altas.idCurso=cursos.id AND idSede=" . $this->idSede . " AND idMateria=" . $this->idMateria . " AND idModalidad=" . $this->idModalidad . " AND cicloLectivo=" . $this->cicloLectivo . " AND altas.final=0 AND alumnos.activo='1'");
		$statement->execute();
		echo "<td class='medio'><span class='rojo'>" . $statement->rowCount() . "</span></td>";
	}
	
	public function imprimirTot($idMod){
		$this->idModalidad = $idMod;
		$statement = $this->conexion->prepare("SELECT cursos.idSede,cursos.idMateria  FROM cursos,altas,alumnos WHERE altas.idAlumno=alumnos.id AND altas.idAlumno=alumnos.id AND altas.idCurso=cursos.id AND idModalidad='" . $this->idModalidad . "' AND idSede=" . $this->idSede . " AND cicloLectivo=" . $this->cicloLectivo . " AND altas.final=0 AND alumnos.activo='1'");
		$statement->execute();
		echo "<td class='medio'><span class='rojo'>" . $statement->rowCount() . "</span></td>";
	}
	
	public function desc(){
		$this->dbh = null;
	}
}

?>