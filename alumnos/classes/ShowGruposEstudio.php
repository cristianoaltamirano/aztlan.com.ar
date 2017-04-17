<?php

class ShowGruposEstudio {

private $idSituacion;
private $cicloLectivo;
private $conexion;

	public function __construct($dbh){
		$this->conexion = $dbh;
	}
	
	public function imprimir($idSit, $cicloLec){
		$this->idSituacion = $idSit;
		$this->cicloLectivo = $cicloLec;
		/* VERIFICO QUE HAYA GRUPOS DE ESTUDIO FORMADOS */
		$statement = $this->conexion->prepare("SELECT gruposestudio.id, dias.dia, horarios.horario FROM gruposestudio, dias, horarios WHERE gruposestudio.idDia=dias.id AND gruposestudio.idHorario=horarios.id AND gruposestudio.idSituacion=" . $this->idSituacion . " AND gruposestudio.cicloLectivo='" . $this->cicloLectivo . "'");
		$statement->execute();
		$count = $statement->rowCount();

			if($count==0){
				/* SI NO HAY, MUESTRO MENSAJE */
				echo "<tr>
					<td class='noInscripto' colspan='2'> No hay Grupos de Estudio formados </td>
				</tr>";
			}else{
				/*SI HAY LOS IMPRIMO */
				$resultSet = $this->conexion->query("SELECT gruposestudio.id, dias.dia, horarios.horario FROM gruposestudio, dias, horarios WHERE gruposestudio.idDia=dias.id AND gruposestudio.idHorario=horarios.id AND gruposestudio.idSituacion=" . $this->idSituacion . " AND gruposestudio.cicloLectivo='" . $this->cicloLectivo . "'");
					while($grupoEstudio = $resultSet->fetchObject()){
						echo "<tr>
								<td><a href='grupoEstudio.php?idGrupoEstudio=".$grupoEstudio->id."' >".$grupoEstudio->dia." - ".$grupoEstudio->horario."</a></td>";
						$statement = $this->conexion->prepare("SELECT altasgrupos.final FROM altasgrupos WHERE altasgrupos.IdGrupo = ".$grupoEstudio->id." AND altasgrupos.final=0");
						$statement->execute();									
						echo "<td class='medio'>".$statement->rowCount()."</td>";
						$statement = $this->conexion->prepare("SELECT altasgrupos.activo FROM altasgrupos WHERE alumnosgruposestudio.IdGrupoEstudio = ".$grupoEstudio->id." AND alumnosgruposestudio.activo=1");
						$statement->execute();									
						//echo "/ ".$statement->rowCount()."</td>
						echo "</tr>";
					}
			}
	}
	
	public function desc(){
		$this->dbh = null;
	}			
	
}

?>