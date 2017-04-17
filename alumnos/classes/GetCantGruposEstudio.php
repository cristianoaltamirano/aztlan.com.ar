<?php

class GetCantGruposEstudio {

private $idSituacion;
private $cicloLectivo;
private $conexion;

	public function __construct($dbh){
		$this->conexion = $dbh;
	}
	
	public function imprimir($idSit, $cicloLec){
		$this->idSituacion = $idSit;
		$this->cicloLectivo = $cicloLec;
		$statement = $this->conexion->prepare("SELECT * FROM gruposestudio WHERE gruposestudio.idSituacion=" . $this->idSituacion . " AND gruposestudio.cicloLectivo='" . $this->cicloLectivo . "'");
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