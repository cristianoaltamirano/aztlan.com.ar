<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
error_reporting(0);
if($_SESSION['usuario']){
if($_POST){
$mensaje = null;

	$materia = $_POST['materia'];
	$modalidad = $_POST['modalidad'];
	$dia = $_POST['dia'];
	$cantDias = 1;
	$diasCurso = "";
	$horario = $_POST['horario'];
	$sede = $_POST['sede'];
	$aula = $_POST['aula'];
	$inst1 = $_POST['inst1'];
	$inst2 = $_POST['inst2'];
	$inst3 = $_POST['inst3'];
	$fechaInicio = $_POST['fechaInicio'];
	$valor = $_POST['valor'];
	$dpm = $_POST['dpm'];
	$idMesDp = $_POST['idMesDp'];
	$valorPm = $_POST['valorPm'];
	$cicloLectivo = $_POST['cicloLectivo'];
	
	include ("funciones.php");
	$fechaInicio = ordenarFecha($fechaInicio);
	
	if($materia&&$dia&&$horario&&$sede&&$fechaInicio&&$valor&&$aula&&$cicloLectivo){
		if($inst1){
			include('connect.php');
				$statement = $dbh->prepare("SELECT * FROM cursos WHERE idMateria='$materia' AND idModalidad='$modalidad' AND idDia='$dia' AND idHorario='$horario' AND idSede='$sede' AND idAula='$aula' AND idsituacion='1' AND cicloLectivo='$cicloLectivo'");
				$statement->execute();
				$count = $statement->rowCount();
				if($count==0){
					$dbh->query("INSERT INTO cursos VALUES('','$materia','$modalidad','$cantDias','$diasCurso','$dia','$horario','$sede','$aula','$fechaInicio','$valor','$dpm','$idMesDp','$valorPm','1','1','$cicloLectivo','$inst1','$inst2','$inst3')");
						
					//echo "('INSERT INTO cursos VALUES('','$materia','$modalidad','$cantDias','$diasCurso','$dia','$horario','$sede','$aula','$fechaInicio','$valor','$dpm','$idMesDp','$valorPm','1','1','$cicloLectivo','$inst1','$inst2','$inst3')";

					$mensaje = "<span class='verde'>El curso se creó correctamente.</span>";
				}else{
					$mensaje = "<span class='rojo'>El curso ya se encuentra cargado</span>";
				}
		}else{
			$mensaje = "<span class='rojo'>Se deben seleccionar los instructores.</span>";
		}
	}else{
		$mensaje = "<span class='rojo'>Se deben llenar todos los campos</span>";	
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-AR">
	<head>
		<title>Nuevo Curso</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		<link type="text/css" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" rel="Stylesheet" />	
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		<script type="text/javascript" src="js/jquery.ui.datepicker-es.js"></script>

		<script>
		$(document).ready(function(){
				$("#idMesDp").attr("disabled",true);	
				$("#valorPm").attr("disabled",true);
			$('#deshabilita').click(function(){
				$("#idMesDp").attr("disabled",true);	
				$("#valorPm").attr("disabled",true);				
			}); 
		});
		$(document).ready(function(){
			$('#habilita').click(function(){
				$("#idMesDp").removeAttr("disabled");
				$("#valorPm").removeAttr("disabled");			
			}); 
		});
		</script>		
		
		
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
				<h3>Nuevo Curso</h3>
				
				<form action='nuevoCurso.php' method="post">
					<table class='tablaCurso'>
						<tr>
							<td>Materia:</td>
							<td>
								<select name='materia'>
									<option value='0'> Seleccionar... </option>
								<?php 
								$resultSet = $dbh->query('SELECT * FROM materias');
								while($materia = $resultSet->fetchObject()){
									echo "<option value='".$materia->id."'>".$materia->materia."</option>";
								}
								?>
								</select>
							</td>
							<td>Dif. 1er Mes:</td>
							<td>
								No <input id="deshabilita" type="radio" value="0" name="dpm" checked/> Si <input id="habilita" type='radio' name='dpm' value='1' />  
							</td>
						</tr>
						<tr>
							<td>Modalidad:</td>
							<td>
								<select name='modalidad'>
									<option value='0'> Seleccionar... </option>
								<?php 
								$resultSet = $dbh->query('SELECT * FROM modalidades');
								while($modalidad = $resultSet->fetchObject()){
									echo "<option value='".$modalidad->id."'>".$modalidad->modalidad."</option>";
								}
								?>
								</select>
							</td>
							<td>Mes de dif.: </td>
							<td>
								<select id='idMesDp' name='idMesDp'>
								<?php 
								$resultSet = $dbh->query('SELECT * FROM meses');
								while($mes = $resultSet->fetchObject()){
									echo "<option value='".$mes->id."'>".$mes->mes."</option>";
								}
								?>
								</select>
							</td>
						</tr>						
						<tr>
							<td>D&iacute;a:</td>
							<td>
								<select name='dia'>
									<option value='0'> Seleccionar... </option>
								<?php 
								$resultSet = $dbh->query('SELECT * FROM dias');
								while($dia = $resultSet->fetchObject()){
									echo "<option value='".$dia->id."'>".$dia->dia."</option>";
								}
								?>
								</select>
							</td>
							<td>Valor 1er Mes: </td>
							<td><input id="valorPm" type="text"	name="valorPm" /></td>
						</tr>
						<tr>
							<td>Horario:</td>
							<td>
								<select name='horario'>
									<option value='0'> Seleccionar... </option>
								<?php 
								$resultSet = $dbh->query('SELECT * FROM horarios ORDER BY horario ASC');
								while($horario = $resultSet->fetchObject()){
									echo "<option value='".$horario->id."'>".$horario->horario."</option>";
								}
								?>
								</select>
							</td>
							<td>Ciclo Lectivo: </td>
							<td>
								<select name='cicloLectivo'>
									<option value='0'> Seleccionar... </option>
								<?php 
								$resultSet = $dbh->query('SELECT * FROM ciclolectivos');
								while($cicloLectivo = $resultSet->fetchObject()){
									echo "<option value='".$cicloLectivo->cicloLectivo."'>".$cicloLectivo->cicloLectivo."</option>";
								}
								?>
								</select>							
							</td>
						</tr>
						<tr>
							<td>Turno:</td>
							<td>
								<select name='sede'>
									<option value='0'> Seleccionar... </option>
								<?php 
								$resultSet = $dbh->query('SELECT * FROM sedes');
								while($sede = $resultSet->fetchObject()){
									echo "<option value='".$sede->id."'>".$sede->sede."</option>";
								}
								?>
								</select>
							</td>
							<td>Instructor 1:</td>
							<td>
								<select name='inst1'>
									<option value='0'> Seleccionar... </option>
								<?php 
								$resultSet = $dbh->query('SELECT * FROM instructores ORDER BY nombre');
								while($inst = $resultSet->fetchObject()){
									echo "<option value='".$inst->id."'>".$inst->nombre." ".$inst->apellido."</option>";
								}
								?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Aula:</td>
							<td>
								<select name='aula'>
									<option value='0'> Seleccionar... </option>
								<?php 
								$resultSet = $dbh->query('SELECT * FROM aulas');
								while($aula = $resultSet->fetchObject()){
									echo "<option value='".$aula->id."'>".$aula->aula."</option>";
								}
								?>
								</select>
							</td>
							<td>Instructor 2:</td>
							<td>
								<select name='inst2'>
									<option value='0'> Seleccionar... </option>
								<?php 
								$resultSet = $dbh->query('SELECT * FROM instructores ORDER BY nombre');
								while($inst = $resultSet->fetchObject()){
									echo "<option value='".$inst->id."'>".$inst->nombre." ".$inst->apellido."</option>";
								}
								?>
								</select>
							</td>
						</tr>						
						<tr>
							<td>Fecha de Inicio:</td>
							<td><input id="datepicker" type="text"	name="fechaInicio" value="" /></td>
							<td>Instructor 3:</td>
							<td>
								<select name='inst3'>
									<option value='0'> Seleccionar... </option>
								<?php 
								$resultSet = $dbh->query('SELECT * FROM instructores ORDER BY nombre');
								while($inst = $resultSet->fetchObject()){
									echo "<option value='".$inst->id."'>".$inst->nombre." ".$inst->apellido."</option>";
								}
								?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Valor: </td>
							<td><input type="text"	name="valor" value="" /></td>
						</tr>
						<tr>
							<td colspan='2'><input type='submit' name='submit' value='Dar de Alta' /><?php echo $mensaje;?></td>
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