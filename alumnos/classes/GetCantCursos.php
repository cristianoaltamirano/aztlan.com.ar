<?php

class GetCantCursos {

private $idModalidad;
private $idSituacion;
private $cicloLectivo;
private $conexion;

	public function __construct($dbh){
		$this->conexion = $dbh;
	}
	
	public function imprimir($idMod, $idSit, $cicloLec){
		$this->idModalidad = $idMod;
		$this->idSituacion = $idSit;
		$this->cicloLectivo = $cicloLec;
		$statement = $this->conexion->prepare("SELECT * FROM cursos WHERE idModalidad=" . $this->idModalidad . " AND cursos.idSituacion=" . $this->idSituacion . " AND cicloLectivo='" . $this->cicloLectivo . "'");
		$statement->execute();
		$count = $statement->rowCount();
		echo "<span class='rojo'>".$count."</span>";
		echo "</h4>";	
	}
	
	public function desc(){
		$this->dbh = null;
	}
	
}

?>