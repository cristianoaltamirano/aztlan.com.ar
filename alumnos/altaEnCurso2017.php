<?php
session_start();
//error_reporting(0);
header('Content-Type: text/html; charset=utf-8');
if($_SESSION['usuario']){

if($_POST){

	$idAlumno = $_POST['idAlumno'];
	$idCurso = $_POST['idCurso'];
	$desc = $_POST['desc'];
	$montoDesc = $_POST['montoDesc'];
	$matricula = $_POST['matricula'];
	$montoMat = $_POST['montoMat'];
	$fecha = $_POST['fecha'];
	$idPeriodo = '';
	$fechaBaja = "0000-00-00";
	$pagoDesc = "0";
		if($fecha!=0){
			include('funciones.php');	
			$fecha = ordenarFecha($fecha);
				if($idAlumno>0){
					
				include('connect.php');
				$statement = $dbh->prepare("SELECT * FROM altas WHERE idAlumno='$idAlumno' AND idCurso='$idCurso'");
				$statement->execute();
				$count = $statement->rowCount();

				if($count==0){
					$dbh->query("INSERT INTO altas VALUES('','$idAlumno','$idCurso','$desc','$montoDesc','$matricula','$montoMat','$mpagoMat','$fecha','','','$fechaBaja','1','1', '$fecha')");
					echo "INSERT INTO altas VALUES('','$idAlumno','$idCurso','$desc','$montoDesc','$matricula','$montoMat','$mpagoMat','$fecha','','','$fechaBaja','1','1', '$fecha','$pagoDesc')";
					include('funciones2.php');
					$fecha = reOrdenarFecha($fecha);
					$resultSet = $dbh->query("SELECT materias.materia, altas.idCurso, cursos.id FROM materias, altas, cursos WHERE altas.idCurso='$idCurso' AND altas.idCurso=cursos.id AND materias.id=cursos.idMateria");
					$curso = $resultSet->fetchObject();
					$dbh->query("INSERT INTO historial VALUES('',$idAlumno,'Se di&oacute de alta en el curso de ".$curso->materia." a partir del $fecha')");
					$_SESSION['idAlta'] = $dbh->lastInsertId();
					$_SESSION['mensaje'] = "<span class='verde'>El alta se realizó correctamente. Carga el Pago:</span>";
					header("location:informarPagos3.php?idAlumno=$idAlumno&idCurso=$idCurso");
				}else{
					$mensaje = "<span class='rojo'>El alta ya fué realizada anteriormente.</span>";	
				}
			}else{
				$mensaje = "<span class='rojo'>Se debe seleccionar un Alumno.</span>";	
			}
		}else{
			$mensaje = "<span class='rojo'>Se debe llenar el campo fecha.</span>";	
		}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
	<head>
		<title>Alta en Cursos</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />		
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
		$p=2;
		include('cabecera.php');
		include('connect.php');
		
		?>
		
		<div id='cuerpo'>
			<div class='innerCuerpo'>
				<h3>Alta en Cursos (2017)</h3>
				<form action='altaEnCurso2017.php' method="post">				
					<table class='tablaAltaEnCurso'>
						<tr>
							<td>Alumno:</td>
							<td>
								<select id='idAlumno' name="idAlumno">
									<option value="0" selected>Elegir Alumno...</option>
										<?php 
										include ("connect.php");
										$resultSet = $dbh->query('SELECT * FROM alumnos WHERE activo = 1 ORDER BY apellido');
											while($alumno = $resultSet->fetchObject()){
												echo "<option value='".$alumno->id."'>".$alumno->apellido." ".$alumno->nombre."</option>";
											}
										?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Curso:</td>
							<td>
								<select name='idCurso'>
								<option value='0'>Elige un curso...</option>
								<optgroup label="Tarde - Aula 1 - Anual">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=1 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=1 AND idModalidad=2 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>
								<optgroup label="Tarde - Aula 2 - Anual">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=1 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=2 AND idModalidad=2 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>		
								<optgroup label="Tarde - Aula 3 - Anual">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=1 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=3 AND idModalidad=2 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>		
								<optgroup label="Tarde - Aula 4 - Anual">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=1 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=4 AND idModalidad=2 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>								
								<optgroup label="Ma&ntilde;ana - Aula 1 - Anual">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=2 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=1 AND idModalidad=2 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>
								<optgroup label="Ma&ntilde;ana - Aula 2 - Anual">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=2 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=2 AND idModalidad=2 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>	
								<optgroup label="Ma&ntilde;ana - Aula 3 - Anual">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=2 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=3 AND idModalidad=2 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>	
								<optgroup label="Ma&ntilde;ana - Aula 4 - Anual">
								<?php 
								$resultSet = $dbh->query("SELECT cursos.id, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idSede=2 AND cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND aulas.id=4 AND idModalidad=2 AND idSituacion=1 AND cicloLectivo='2017' ORDER BY cursos.idDia, horarios.horario ASC");
								while($curso = $resultSet->fetchObject()){
									echo "<option value='".$curso->id."'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</option>";
								}
								?>
								</optgroup>	
								
								</select>
							</td>
						</tr>
						<tr>
							<td>Descuento:</td>
							<td>
								<select name="desc">
									<option value="0">No</option>
									<option value="1">Si</option>
								</select>
								Valor $<input type='text' name='montoDesc' maxlength="5" /></td>
						</tr>
						<tr>
							<td>Matricula</td>
							<td>
								<select name="matricula">
									<option value="0">No</option>
									<option value="1">Si</option>
								</select>
								Valor $<input type='text' name='montoMat' maxlength="5" /></td>
						</tr>
						<tr>
							<td>Fecha de Comienzo:</td>
							<td><input id="datepicker" type="text"	name="fecha" /></td>
						</tr>
						<tr>
							<td colspan='2'><input type='submit' name='submit' value='Dar de Alta'/></td>
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