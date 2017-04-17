<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(0);
session_start();
if($_SESSION['usuario']){
	if($_SESSION['idCurso']){
		$idCurso = $_SESSION['idCurso'];
	}
	if($_GET){
		$idCurso = $_GET['idCurso'];
		/*Paso el dia a la variable comparacion para pasarlo UNIXTIME y comparar cn el inicio del curso del alumno para imprimirlo o no*/
		include("funciones.php");

	}else{
		header("location:index.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-AR">

	<head>
		<title>Pasar Alumnos</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<link type="text/css" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" rel="Stylesheet" />	

		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		<script type="text/javascript" src="js/jquery.ui.datepicker-es.js"></script>
		
		<script>
			$(function() {
				$( "#datepicker" ).datepicker();
			});
		 </script>		
		  		 
		 
	</head>
	<body>

		<?php
		$p=6;
		include('cabecera.php');
		?>
		
		<div id='cuerpo'>
			<div class='innerCuerpo'>
				<?php
				include("connect.php");
				$resultSet = $dbh->query("SELECT cursos.id,materias.materia,dias.dia,horarios.horario,sedes.sede FROM cursos,materias,dias,horarios,sedes WHERE cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.id='$idCurso'");
				$curso = $resultSet->fetchObject();
				echo "<h3>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede."</h3>";
				include('barraNav2.html');
				?>
				<h4>Elejir el curso, fecha y los alumnos que se quieren pasar: <?php echo $dia;?></h4>
				
				<form name='presentismoForm' action='informePases.php' method='post'>
			
							<p>Curso: 
								<select name='idCursoNuevo'>
								<option value='0'>Elige un curso...</option>


								<!-- <optgroup label="Sede I - Aula Grande - Verano">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=1 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=1 AND idModalidad=1 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>
								<optgroup label="Sede I - Aula Chica - Verano">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=1 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=2 AND idModalidad=1 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>		
								<optgroup label="Sede I - Aula Mediana - Verano">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=1 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=3 AND idModalidad=1 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>										
								<optgroup label="Sede II - Aula Grande - Verano">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=2 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=1 AND idModalidad=1 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>
								<optgroup label="Sede II - Aula Mediana - Verano">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=2 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=3 AND idModalidad=1 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>	
								<optgroup label="Sede II - Aula Chica - Verano">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=2 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=2 AND idModalidad=1 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>	 -->
								<optgroup label="Sede I - Aula Grande - Anual">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=1 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=1 AND idModalidad=2 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>
								<optgroup label="Sede I - Aula Chica - Anual">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=1 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=2 AND idModalidad=2 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>		
								<optgroup label="Sede I - Aula Mediana - Anual">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=1 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=3 AND idModalidad=2 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>										
								<optgroup label="Sede II - Aula Grande - Anual">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=2 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=1 AND idModalidad=2 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>
								<optgroup label="Sede II - Aula Mediana - Anual">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=2 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=3 AND idModalidad=2 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>	
								<optgroup label="Sede II - Aula Chica - Anual">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=2 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=2 AND idModalidad=2 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>	

								
								</select>
							</p>
						<p>Fecha:  <input id="datepicker" type="text" name="fecha" /></p>
				<br />
				<table class="presentes">
						<tr>	
							<th></th>
							<th>Nombre y Apellido</th>
							<th>Pasa</th>
						</tr>
					<?php
					/* TOMO FECHA DESDE Y HASTA DEL PERIODO VIGENTE */	
					$resultSet = $dbh->query("SELECT * FROM meses WHERE id=$idP");
					$mes = $resultSet->fetchObject();
					$desdePer = $mes->desde;
					$hastaPer = $mes->hasta;	
					
					/* SELECCIONO LOS ALUMNOS */
					$resultSet = $dbh->query("SELECT alumnos.*,altas.idCurso FROM alumnos,altas WHERE alumnos.id=altas.idAlumno AND altas.IdCurso = $idCurso AND altas.final=0 AND alumnos.activo=1 ORDER BY alumnos.apellido");
					/* echo "SELECT alumnos.id,alumnos.nombre,alumnos.apellido FROM alumnos,altas WHERE altas.idAlumno=alumnos.id AND altas.idCurso='".$idCurso."' ORDER BY alumnos.apellido"; */
					$k=1;
					$p=100;
					$a=0;
					while($alumno = $resultSet->fetchObject()){
						$result = $dbh->query("SELECT * FROM altas WHERE idCurso=".$idCurso."");
							echo "<tr>
										<td class='medio'>".$r."</td>
										<td> ".$alumno->apellido." ".$alumno->nombre."</td>
										<td><input type='checkbox' name='".$p."' value='1' /></td>
									</tr>
									";
							echo "<input type='hidden' name='".$a."' value='".$alumno->id."' />";
							$k=$k+1;
							$p=$p+1;
							$a=$a+1;				
					}
					echo "<input type='hidden' name='k' value='$k' />";
					//$dia = reconvertiaFecha($dia);
					echo "<input type='hidden' name='idCurso' value='$idCurso' />";
					?>
						<tr>
							<td colspan='3'><input type='submit' name='submit' value='Pasar' /></td>
						</tr>
					</table>
				</form>
			</div>
			<div class=''clear></div>
		</div>
		
		<?php include('pie.php');?>
	</body>
</html>		
<?php
}else{
header("location:index.php");
}
?>		